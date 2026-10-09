<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\PostCategory;
use App\Models\PostTags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class SeoController extends Controller
{
    // Base URL follows the host that was actually requested, so lunaray.id never advertises staging URLs
    // (and vice versa). Indexable hosts always resolve to the single primary host over https.
    private function siteUrl(): string
    {
        $host = request()->getHost();
        if (in_array($host, config('seo.indexable_hosts'), true)) {
            return 'https://' . config('seo.primary_host');
        }

        return request()->getScheme() . '://' . request()->getHttpHost();
    }

    /**
     * Dynamic robots.txt with sitemap references and AI crawler rules.
     */
    public function robots(Request $request)
    {
        $baseUrl = $this->siteUrl();
        $year = date('Y');

        if (! in_array($request->getHost(), config('seo.indexable_hosts'), true)) {
            return response("# Non-production host — not for indexing
User-agent: *
Disallow: /
", 200, [
                'Content-Type' => 'text/plain; charset=utf-8',
                'Cache-Control' => 'public, max-age=3600',
            ]);
        }

        $lines = [
            "# robots.txt - Lunaray Beauty Factory",
            "# Generated: {$year}",
            "",
            "User-agent: *",
            "Allow: /",
            "",
            "# XML Sitemaps",
            "Sitemap: {$baseUrl}/sitemap.xml",
            "Sitemap: {$baseUrl}/sitemap/pages.xml",
            "Sitemap: {$baseUrl}/sitemap/posts.xml",
            "Sitemap: {$baseUrl}/sitemap/categories.xml",
            "Sitemap: {$baseUrl}/sitemap/tags.xml",
            "",
            "# AI Search Engine Feed",
            "LLM-Info: {$baseUrl}/llms.txt",
            "",
            "# OpenSearch",
            "Sitemap: {$baseUrl}/opensearch.xml",
            "",
            "# Disallow admin & internal paths",
            "Disallow: /portal/",
            "Disallow: /admin/",
            "Disallow: /api/",
            "Disallow: /_debugbar/",
            "Disallow: /storage/debugbar/",
            "",
            "# Crawl-delay",
            "Crawl-delay: 1",
            "",
            "# AI / LLM Crawlers (GEO)",
            "",
            "User-agent: GPTBot",
            "Allow: /",
            "User-agent: ChatGPT-User",
            "Allow: /",
            "User-agent: CCBot",
            "Allow: /",
            "User-agent: OAI-SearchBot",
            "Allow: /",
            "User-agent: PerplexityBot",
            "Allow: /",
            "User-agent: Perplexica-Bot",
            "Allow: /",
            "User-agent: ClaudeBot",
            "Allow: /",
            "User-agent: anthropic-ai",
            "Allow: /",
            "User-agent: Meta-ExternalAgent",
            "Allow: /",
            "User-agent: Diffbot",
            "Allow: /",
            "User-agent: Bytespider",
            "Allow: /",
            "User-agent: Google-Extended",
            "Allow: /",
            "User-agent: Amazonbot",
            "Allow: /",
            "User-agent: Applebot-Extended",
            "Allow: /",
            "",
            "User-agent: DeepSeekBot",
            "Allow: /",
            "User-agent: Grok",
            "Allow: /",
            "User-agent: YouBot",
            "Allow: /",
            "",
            "# Social Media",
            "",
            "User-agent: FacebookExternalHit",
            "Allow: /",
            "User-agent: Twitterbot",
            "Allow: /",
            "User-agent: linkedinbot",
            "Allow: /",
            "User-agent: WhatsApp",
            "Allow: /",
            "User-agent: TelegramBot",
            "Allow: /",
            "",
            "# Search Engines",
            "",
            "User-agent: Googlebot",
            "Allow: /",
            "User-agent: Googlebot-Image",
            "Allow: /",
            "User-agent: Googlebot-News",
            "Allow: /",
            "User-agent: Googlebot-Video",
            "Allow: /",
            "User-agent: Bingbot",
            "Allow: /",
            "User-agent: Slurp",
            "Allow: /",
            "User-agent: DuckDuckBot",
            "Allow: /",
            "User-agent: YandexBot",
            "Allow: /",
            "User-agent: Naverbot",
            "Allow: /",
        ];

        $content = implode("\n", $lines);

        return response($content, 200, [
            'Content-Type' => 'text/plain; charset=utf-8',
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }

    /**
     * Sitemap index (points to sub-sitemaps).
     */
    public function sitemapIndex()
    {
        $baseUrl = $this->siteUrl();
        $now = now()->toISOString();

        $content = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $content .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        $content .= '<sitemap><loc>' . e($baseUrl) . '/sitemap/pages.xml</loc><lastmod>' . e($now) . '</lastmod></sitemap>' . "
";
        $content .= '<sitemap><loc>' . e($baseUrl) . '/sitemap/posts.xml</loc><lastmod>' . e($now) . '</lastmod></sitemap>' . "\n";
        $content .= '<sitemap><loc>' . e($baseUrl) . '/sitemap/categories.xml</loc><lastmod>' . e($now) . '</lastmod></sitemap>' . "\n";
        $content .= '<sitemap><loc>' . e($baseUrl) . '/sitemap/tags.xml</loc><lastmod>' . e($now) . '</lastmod></sitemap>' . "\n";
        $content .= '</sitemapindex>';

        return response($content, 200, [
            'Content-Type' => 'application/xml; charset=utf-8',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }

    /**
     * Sitemap: static marketing pages (every route listed in config/seo.php).
     */
    public function sitemapPages()
    {
        $baseUrl = $this->siteUrl();
        $lastmod = config('seo.pages_lastmod');

        $entries = '';
        foreach (array_keys(config('seo.pages')) as $name) {
            $path = parse_url(route($name), PHP_URL_PATH) ?? '/';
            $priority = $name === 'beranda' ? '1.0' : '0.9';
            $entries .= '<url><loc>' . e($baseUrl . $path) . '</loc><lastmod>' . $lastmod . '</lastmod><changefreq>monthly</changefreq><priority>' . $priority . '</priority></url>' . "
";
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "
"
            . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "
" . $entries . '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=utf-8',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }

    /**
     * Sitemap: Posts (articles).
     * Cached 1 hour.
     */
    public function sitemapPosts()
    {
        $xml = Cache::remember('sitemap_posts_xml:' . $this->siteUrl(), 3600, function () {
            $baseUrl = $this->siteUrl();
            $posts = Posts::where('posts.status', 'active')
                ->whereNotNull('posts.published_at')
                ->join('post_categories', 'posts.category_id', '=', 'post_categories.id')
                ->orderBy('posts.published_at', 'desc')
                ->limit(5000)
                ->get(['posts.slug', 'posts.title', 'posts.published_at', 'posts.updated_at', 'posts.image', 'post_categories.slug as category_slug']);

            $entries = '';
            foreach ($posts as $post) {
                $url = e("{$baseUrl}/{$post->category_slug}/{$post->slug}");
                $lastmod = $post->published_at ? $post->published_at->toISOString() : $post->updated_at->toISOString();
                $imageTag = '';
                if (!empty($post->image)) {
                    $imageUrl = e(getFile($post->image));
                    $imageTag = '<image:image><image:loc>' . $imageUrl . '</image:loc></image:image>';
                }
                $entries .= '<url><loc>' . $url . '</loc><lastmod>' . $lastmod . '</lastmod><changefreq>weekly</changefreq><priority>0.8</priority>' . $imageTag . '</url>' . "\n";
            }

            return '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
' . $entries . '</urlset>';
        });

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=utf-8',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }

    /**
     * Sitemap: Categories.
     */
    public function sitemapCategories()
    {
        $xml = Cache::remember('sitemap_categories_xml:' . $this->siteUrl(), 3600, function () {
            $baseUrl = $this->siteUrl();
            $cats = PostCategory::get(['slug', 'name']);

            $entries = '';
            foreach ($cats as $cat) {
                $url = e("{$baseUrl}/{$cat->slug}");
                $lastmod = now()->toISOString();
                $entries .= '<url><loc>' . $url . '</loc><lastmod>' . $lastmod . '</lastmod><changefreq>daily</changefreq><priority>0.6</priority></url>' . "\n";
            }

            return '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
' . $entries . '</urlset>';
        });

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=utf-8',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }

    /**
     * llms.txt — For AI Search Engines (Perplexity, Claude, ChatGPT, Gemini).
     * This file tells AI agents what content is available for grounding their answers.
     * Format: https://llmstxt.vertices.so/docs/site-guide
     */
    public function llms(Request $request)
    {
        $content = Cache::remember('llms_txt:' . $this->siteUrl(), 1800, function () {
            $baseUrl = $this->siteUrl();
            $siteName = config('app.name') ?? 'Lunaray Beauty Factory';
            $webIdentity = \App\Models\WebIdentity::first();
            $lines = [];

            // Header
            $lines[] = "# {$siteName} - Cosmetic Development & Manufacturing";
            $lines[] = "# Last updated: " . now()->format('Y-m-d H:i:s') . " UTC";
            $lines[] = "";
            $lines[] = "# Cosmetic development and manufacturing company in Indonesia (maklon kosmetik)";
            $lines[] = "# Language: Indonesian (id-ID)";
            $lines[] = "";

            // Main URL
            $lines[] = "## Site";
            $lines[] = "URL: {$baseUrl}";
            $lines[] = "";

            // About section
            $lines[] = "## About";
            $lines[] = "{$siteName} adalah perusahaan pengembangan dan manufaktur kosmetik";
            $lines[] = "di Indonesia yang membantu founder, brand, dan perusahaan mengembangkan";
            $lines[] = "produk dari pemahaman consumer problem, market evidence, dan scientific";
            $lines[] = "evidence hingga menjadi produk kosmetik nyata (formulation, validation,";
            $lines[] = "regulatory, manufacturing). Fasilitas produksi berstatus CPKB Kelas A";
            $lines[] = "dengan Sistem Jaminan Halal (SJH), didukung kolaborasi riset bersama";
            $lines[] = "BRIN, Unpad, ITB, IPB University, dan STFI. Tim terdiri dari formulator,";
            $lines[] = "scientist, dan tenaga ahli manufacturing dengan pengalaman lebih dari";
            $lines[] = "25 tahun di industri kosmetik dan lebih dari 15 buku/kontribusi keilmuan.";
            $lines[] = "";

            // Navigation — real Lunaray pages (not the dummy blog taxonomy)
            $lines[] = "## Navigation";
            $lines[] = "- Home: {$baseUrl}/";
            $lines[] = "- Why Lunaray: {$baseUrl}/why-lunaray";
            $lines[] = "- About Lunaray: {$baseUrl}/about";
            $lines[] = "- Develop With Us (alur maklon & pengembangan produk): {$baseUrl}/develop-with-us";
            $lines[] = "- Capabilities — Regular (skincare, body, hair, makeup, dll.): {$baseUrl}/capabilities";
            $lines[] = "- Capabilities — Specialty Care: {$baseUrl}/capabilities/specialty";
            $lines[] = "- Capabilities — Beyond Cosmetics (wellness, PKRT, herbal): {$baseUrl}/capabilities/beyond-cosmetics";
            $lines[] = "- Capabilities — Packaging: {$baseUrl}/capabilities/packaging";
            $lines[] = "- Capabilities — Science & Research: {$baseUrl}/capabilities/science-research";
            $lines[] = "- AI Concept Builder (AI Skin, Product & Wellness Intelligence): {$baseUrl}/ai-concept-builder";
            $lines[] = "- Beautyversity (artikel research, science, innovation): {$baseUrl}/beautyversity";
            $lines[] = "- FAQ (Maklon & Pengembangan Kosmetik): {$baseUrl}/faq";
            $lines[] = "- Contact: {$baseUrl}/contact";
            $lines[] = "- Full text of all pages (for AI grounding): {$baseUrl}/llms-full.txt";
            $lines[] = "";

            // Key facts — high-confidence answers for AI grounding (AEO)
            $lines[] = "## Key Facts";
            $lines[] = "- Service model: maklon skincare, White Label, OEM, ODM, hingga custom development";
            $lines[] = "- Experience: 25+ tahun di industri kosmetik, 15+ buku/kontribusi keilmuan";
            $lines[] = "- Facility certification: CPKB Kelas A, Sistem Jaminan Halal (SJH)";
            $lines[] = "- Research collaboration: BRIN, Unpad, ITB, IPB University, STFI";
            $lines[] = "- Location: Indonesia";
            if (!empty($webIdentity?->email)) {
                $lines[] = "- Email: {$webIdentity->email}";
            }
            if (!empty($webIdentity?->phone_number)) {
                $lines[] = "- Phone: {$webIdentity->phone_number}";
            }
            $lines[] = "";

            $lines[] = "## Research Portfolio ({$baseUrl}/capabilities/science-research)";
            $lines[] = "- Soy Isoflavone Aglycone — soybean-derived active development (riset apt. Cahya Khairani Kusumawulan)";
            $lines[] = "- Patin Oil / Pangasia Oil — in collaboration with IPB University";
            $lines[] = "- Eggshell-Derived Cosmetic Active — in collaboration with Institut Teknologi Bandung (ITB)";
            $lines[] = "- Phytocosmetic Active Research (Kemiri, Rosemary, Daun Pinus) — LABCOS Universitas Padjadjaran";
            $lines[] = "- PhytoSync — blended phytocosmetic active system";
            $lines[] = "- Ashitaba Extraction Research — STFI";
            $lines[] = "- Sacha Inchi Nanoemulsion — Universitas Padjadjaran";
            $lines[] = "- hEGF for Hair — Universitas Padjadjaran";
            $lines[] = "- Exosome & Secretome Research — Universitas Padjadjaran";
            $lines[] = "- Cosmetic Research for Diabetes-Related Skin Needs";
            $lines[] = "";

            // FAQ topics — real category index from the 89-question FAQ page
            $lines[] = "## FAQ Topics ({$baseUrl}/faq)";
            $faqTopics = [
                'Memilih Maklon Kosmetik Terbaik & Terpercaya',
                'Memulai Brand & Product Development',
                'Biaya, MOQ & Timeline',
                'Startup, White Label, OEM, ODM, IPM & OBM',
                'Formula, R&D & Product Development',
                'Sample, Validation & Quality',
                'BPOM, Halal, Merek & Regulatory',
                'Science, Research & Institutional Collaboration',
                'Product Categories & Specialty Development',
                'Packaging, Design & Manufacturing',
                'Order, Repeat Order & Commercial Workflow',
                'Formula Ownership & Intellectual Property',
                'Klien Luar Kota & International Project',
                'AI & Beauty Intelligence',
                'Next Step',
            ];
            foreach ($faqTopics as $topic) {
                $lines[] = "- {$topic}";
            }
            $lines[] = "";

            // Feeds
            $lines[] = "## Feeds";
            $lines[] = "Sitemap: {$baseUrl}/sitemap.xml";
            $lines[] = "";

            // AI Usage Policy
            $lines[] = "## AI Usage Policy";
            $lines[] = "All content on {$siteName} is original and human-edited.";
            $lines[] = "AI-generated content is clearly marked where applicable.";
            $lines[] = "Content may be used by AI systems for factual grounding with attribution.";
            $lines[] = "Attribution preferred: \"According to {$siteName}\" or link back to source.";

            return implode("\n", $lines);
        });

        return response($content, 200, [
            'Content-Type' => 'text/plain; charset=utf-8',
            'Cache-Control' => 'public, max-age=1800',
        ]);
    }

    /**
     * RSS / Atom Feed — standard feed for readers and AI crawlers.
     */
    public function feed()
    {
        $content = Cache::remember('rss_feed_xml:' . $this->siteUrl(), 600, function () {
            $baseUrl = $this->siteUrl();
            $siteName = config('app.name') ?? 'Lunaray Beauty Factory';
            $description = config('app.description') ?? 'Lunaray Beauty Factory - Cosmetic Development & Manufacturing';

            $posts = Posts::where('status', 'active')
                ->whereNotNull('published_at')
                ->with('category', 'createdBy')
                ->orderBy('published_at', 'desc')
                ->limit(50)
                ->get(['slug', 'title', 'content', 'published_at', 'image', 'category_id', 'created_by']);

            $items = '';
            foreach ($posts as $post) {
                $categorySlug = $post->category?->slug ?? 'beauty-cosmetics';
                $url = "{$baseUrl}/{$categorySlug}/{$post->slug}";
                $title = htmlspecialchars(trim($post->title), ENT_XML1, 'UTF-8');
                $description = htmlspecialchars(Str::limit(strip_tags($post->content ?? ''), 300), ENT_XML1, 'UTF-8');
                $pubDate = $post->published_at ? gmdate('D, d M Y H:i:s +0000', strtotime($post->published_at)) : gmdate('D, d M Y H:i:s +0000');
                $author = htmlspecialchars($post->createdBy?->name ?? $siteName, ENT_XML1, 'UTF-8');
                $category = htmlspecialchars($post->category?->name ?? 'Beauty & Cosmetics', ENT_XML1, 'UTF-8');
                $image = $post->image ? getFile($post->image) : '';

                $items .= '<item>';
                $items .= '<title>' . $title . '</title>';
                $items .= '<link>' . $url . '</link>';
                $items .= '<guid isPermaLink="true">' . $url . '</guid>';
                $items .= '<description><![CDATA[' . $description . ']]></description>';
                $items .= '<pubDate>' . $pubDate . '</pubDate>';
                $items .= '<author>' . $author . '</author>';
                $items .= '<category>' . $category . '</category>';
                if ($image) {
                    $items .= '<enclosure url="' . e($image) . '" type="image/jpeg" />';
                }
                $items .= '</item>' . "\n";
            }

            $lastBuild = gmdate('D, d M Y H:i:s +0000');
            $feedUrl = "{$baseUrl}/feed.xml";

            return '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"
  xmlns:atom="http://www.w3.org/2005/Atom"
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
  xmlns:dc="http://purl.org/dc/elements/1.1/"
  xmlns:media="http://search.yahoo.com/mrss/">
<channel>
  <title>' . htmlspecialchars($siteName, ENT_XML1, 'UTF-8') . '</title>
  <link>' . $baseUrl . '</link>
  <description>' . htmlspecialchars($description, ENT_XML1, 'UTF-8') . '</description>
  <language>id-id</language>
  <lastBuildDate>' . $lastBuild . '</lastBuildDate>
  <atom:link href="' . $feedUrl . '" rel="self" type="application/rss+xml" />
  <image>
    <url>' . $baseUrl . '/favicon.ico</url>
    <title>' . htmlspecialchars($siteName, ENT_XML1, 'UTF-8') . '</title>
    <link>' . $baseUrl . '</link>
  </image>
' . $items . '</channel>
</rss>';
        });

        return response($content, 200, [
            'Content-Type' => 'application/rss+xml; charset=utf-8',
            'Cache-Control' => 'public, max-age=600',
        ]);
    }

    /**
     * OpenSearch Description — for Windows Search & browser search bar integration.
     */
    public function opensearch()
    {
        $siteName = e(config('app.name') ?? 'Lunaray Beauty Factory');
        $webIdentity = \App\Models\WebIdentity::first();
        $description = e($webIdentity?->meta_description ?? 'Lunaray Beauty Factory - Cosmetic Development & Manufacturing');
        $searchUrl = e($this->siteUrl()) . '/search?q=';

        $xml = '<?xml version="1.0" encoding="UTF-8"?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/"
                       xmlns:moz="http://www.mozilla.org/2006/browser/search/">
  <ShortName>' . $siteName . '</ShortName>
  <Description>' . $description . '</Description>
  <InputEncoding>UTF-8</InputEncoding>
  <OutputEncoding>UTF-8</OutputEncoding>
  <Image width="16" height="16" type="image/x-icon">' . e($this->siteUrl()) . '/favicon.ico</Image>
  <Url type="text/html" method="get" template="' . $searchUrl . '{searchTerms}"/>
  <moz:SearchForm>' . e($this->siteUrl()) . '/search</moz:SearchForm>
</OpenSearchDescription>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=utf-8',
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }

    /**
     * Sitemap: Tags.
     */
    public function sitemapTags()
    {
        $xml = Cache::remember('sitemap_tags_xml:' . $this->siteUrl(), 3600, function () {
            $baseUrl = $this->siteUrl();
            $tags = PostTags::get(['slug', 'name']);

            $entries = '';
            foreach ($tags as $tag) {
                $url = e("{$baseUrl}/tag/{$tag->slug}");
                $lastmod = now()->toISOString();
                $entries .= '<url><loc>' . $url . '</loc><lastmod>' . $lastmod . '</lastmod><changefreq>weekly</changefreq><priority>0.4</priority></url>' . "\n";
            }

            return '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
' . $entries . '</urlset>';
        });

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=utf-8',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }

    /**
     * /llms-full.txt — plain-text copy of the real page content (and latest Beautyversity articles),
     * so AI systems can ground answers on the full text without scraping HTML.
     */
    public function llmsFull()
    {
        $base = $this->siteUrl();

        $text = Cache::remember('llms_full_txt:' . $base, 21600, function () use ($base) {
            $out = [
                '# Lunaray Beauty Factory — Full Content',
                '# Source: ' . $base,
                '# Generated: ' . now()->toDateTimeString() . ' ' . config('app.timezone'),
                '',
                'Plain-text copy of the main pages and the latest Beautyversity articles of ' . $base . '.',
                'Short index: ' . $base . '/llms.txt',
                '',
            ];

            $origin = request()->getSchemeAndHttpHost();
            foreach (array_keys(config('seo.pages')) as $name) {
                if ($name === 'beautyversity') {
                    continue;
                }
                $path = parse_url(route($name), PHP_URL_PATH) ?: '/';
                $body = $this->renderInternal($origin . $path);
                if ($body === null) {
                    continue;
                }
                $out[] = '=====';
                $out[] = 'PAGE: ' . $base . ($path === '/' ? '/' : $path);
                $out[] = '=====';
                $out[] = $this->htmlToText($body, true);
                $out[] = '';
            }

            $tagId = \App\Models\PostTags::where('slug', 'beautyversity')->value('id');
            if ($tagId) {
                $posts = \App\Models\Posts::with('category')
                    ->where('status', 'active')
                    ->whereNotNull('published_at')
                    ->where('published_at', '<=', now())
                    ->withTag($tagId)
                    ->latest('published_at')
                    ->limit(30)
                    ->get();

                if ($posts->isNotEmpty()) {
                    $out[] = '=====';
                    $out[] = 'BEAUTYVERSITY ARTICLES: ' . $base . '/beautyversity';
                    $out[] = '=====';
                    foreach ($posts as $post) {
                        $out[] = '## ' . $post->title;
                        $out[] = 'URL: ' . $base . '/' . ($post->category?->slug ?? 'beautyversity') . '/' . $post->slug;
                        $out[] = 'Published: ' . $post->published_at->toDateString();
                        if ($post->category) {
                            $out[] = 'Category: ' . $post->category->name;
                        }
                        $out[] = '';
                        $out[] = $this->htmlToText('<body>' . $post->content . '</body>', false);
                        $out[] = '';
                    }
                }
            }

            return implode("\n", $out);
        });

        return response($text, 200, [
            'Content-Type' => 'text/plain; charset=utf-8',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }

    /**
     * /ai.txt and /.well-known/ai.txt — machine-readable AI usage policy (mirrors robots.txt access rules).
     */
    public function aiTxt()
    {
        $base = $this->siteUrl();

        if (! in_array(request()->getHost(), config('seo.indexable_hosts'), true)) {
            $body = "# Non-production host — not for AI use\nUser-Agent: *\nDisallow: /\n";
        } else {
            $body = implode("\n", [
                '# ai.txt — Lunaray Beauty Factory (' . $base . ')',
                '# Policy for AI crawlers, AI search and answer engines.',
                '',
                'User-Agent: *',
                'Allow: /',
                'Disallow: /portal/',
                'Disallow: /admin/',
                'Disallow: /api/',
                '',
                '# Usage: public content may be used for search, answers and factual grounding, with attribution',
                '# ("According to Lunaray Beauty Factory") or a link back to the source page.',
                '# Preferred sources for grounding:',
                '#   ' . $base . '/llms.txt',
                '#   ' . $base . '/llms-full.txt',
                '#   ' . $base . '/sitemap.xml',
                '',
            ]);
        }

        return response($body, 200, [
            'Content-Type' => 'text/plain; charset=utf-8',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }

    // Renders a public page in-process (like a test request) and restores the outer request afterwards.
    private function renderInternal(string $url): ?string
    {
        $outer = app('request');
        $driver = config('session.driver');

        try {
            config(['session.driver' => 'array']);
            $inner = \Illuminate\Http\Request::create($url, 'GET');
            $inner->headers->set('User-Agent', 'Lunaray-LLMS-Builder');
            $response = app()->handle($inner);

            return $response->getStatusCode() === 200 ? (string) $response->getContent() : null;
        } catch (\Throwable $e) {
            report($e);

            return null;
        } finally {
            config(['session.driver' => $driver]);
            app()->instance('request', $outer);
            \Illuminate\Support\Facades\Facade::clearResolvedInstance('request');
            app('url')->setRequest($outer);
        }
    }

    private function htmlToText(string $html, bool $mainOnly): string
    {
        $prev = libxml_use_internal_errors(true);
        $doc = new \DOMDocument();
        $doc->loadHTML('<?xml encoding="utf-8" ?>' . $html);
        libxml_clear_errors();
        libxml_use_internal_errors($prev);

        $xp = new \DOMXPath($doc);
        foreach ($xp->query('//script|//style|//noscript|//svg|//form|//button|//iframe|//canvas|//*[@aria-hidden="true"]') as $node) {
            $node->parentNode?->removeChild($node);
        }

        $root = ($mainOnly ? $xp->query('//main')->item(0) : null) ?? $doc->getElementsByTagName('body')->item(0);
        if (! $root) {
            return '';
        }

        $lines = [];
        $buf = '';
        $this->walkText($root, $lines, $buf);
        $this->flushText($lines, $buf);

        $seen = [];
        $unique = [];
        foreach ($lines as $line) {
            if (isset($seen[$line])) {
                continue;
            }
            $seen[$line] = true;
            $unique[] = $line;
        }

        return implode("\n", $unique);
    }

    private function flushText(array &$lines, string &$buf, string $prefix = ''): void
    {
        $t = trim(preg_replace('/\s+/u', ' ', $buf));
        if ($t !== '') {
            $lines[] = $prefix . $t;
        }
        $buf = '';
    }

    private function walkText(\DOMNode $node, array &$lines, string &$buf): void
    {
        $blocks = ['p', 'div', 'section', 'article', 'ul', 'ol', 'table', 'tr', 'td', 'th', 'blockquote', 'figure', 'figcaption', 'aside', 'header', 'footer', 'dl', 'dt', 'dd', 'pre'];

        foreach ($node->childNodes as $child) {
            if ($child instanceof \DOMText) {
                $buf .= $child->nodeValue;
                continue;
            }
            if (! $child instanceof \DOMElement) {
                continue;
            }

            $tag = strtolower($child->tagName);
            if (preg_match('/^h([1-6])$/', $tag, $m)) {
                $this->flushText($lines, $buf);
                $this->walkText($child, $lines, $buf);
                $this->flushText($lines, $buf, str_repeat('#', (int) $m[1]) . ' ');
            } elseif ($tag === 'li') {
                $this->flushText($lines, $buf);
                $this->walkText($child, $lines, $buf);
                $this->flushText($lines, $buf, '- ');
            } elseif ($tag === 'br') {
                $buf .= ' ';
            } elseif (in_array($tag, $blocks, true)) {
                $this->flushText($lines, $buf);
                $this->walkText($child, $lines, $buf);
                $this->flushText($lines, $buf);
            } else {
                $this->walkText($child, $lines, $buf);
            }
        }
    }
}
