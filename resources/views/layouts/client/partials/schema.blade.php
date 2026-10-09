@php
    /*
     * Single JSON-LD @graph for every public page: Organization + WebSite + WebPage (+ BreadcrumbList).
     * Page-specific extras (Article, FAQPage, ...) are pushed by the page itself and reference these @ids.
     * Values that MetaServiceProvider fills with placeholders ('#', 'info@example.com') are never emitted.
     */
    $sOrigin = preg_match('~^(https?://[^/]+)~', $canonicalUrl, $om) ? $om[1] : rtrim(url('/'), '/');
    $sOrgId = $sOrigin . '/#organization';
    $sSiteId = $sOrigin . '/#website';
    $sPageUrl = strtok($canonicalUrl, '?');
    $sRoute = request()->route()?->getName();
    $sPages = config('seo.pages');

    $sReal = fn ($v, $bad = ['#', 'info@example.com']) => (! empty($v) && ! in_array($v, $bad, true)) ? $v : null;
    $sLogo = $sReal($meta->logo ?? null) ?: asset('assets/img/lunaray/brand/logo-lunaray.webp');
    $sOg = $sReal($meta->og_image ?? null);

    $sSame = array_values(array_filter([
        $sReal($meta->instagram_link ?? null) ?: 'https://www.instagram.com/lunaraybeautyfactory/',
        'https://www.linkedin.com/company/lunaray',
        'https://www.tiktok.com/@lunaraybeautyfactory',
        $sReal($meta->youtube_link ?? null) ?: 'https://www.youtube.com/@lunaraybeautyfactory',
        $sReal($meta->facebook_link ?? null),
        $sReal($meta->twitter_link ?? null),
    ]));

    $sOrg = [
        '@type' => 'Organization',
        '@id' => $sOrgId,
        'name' => 'Lunaray Beauty Factory',
        'alternateName' => ['Lunaray', 'Lunaray Beauty Factory Indonesia'],
        'url' => $sOrigin . '/',
        'logo' => ['@type' => 'ImageObject', 'url' => $sLogo],
        'description' => 'Lunaray adalah perusahaan pengembangan dan manufaktur kosmetik (maklon kosmetik) berbasis sains di Bandung, Indonesia, yang melayani Startup, White Label, OEM, ODM, IPM, dan OBM — dari consumer problem, scientific evidence, dan formulasi hingga produksi, dengan dukungan regulatory BPOM dan Halal.',
        'slogan' => 'Science in Beauty, Beauty in Reality',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Nanjung Industrial Park, Jl. Terusan Nanjung Kav.9, Sukabirus',
            'addressLocality' => 'Margaasih, Kabupaten Bandung',
            'addressRegion' => 'Jawa Barat',
            'postalCode' => '40217',
            'addressCountry' => 'ID',
        ],
        'areaServed' => ['@type' => 'Country', 'name' => 'Indonesia'],
        'knowsAbout' => [
            'Maklon kosmetik', 'Cosmetic development', 'Cosmetic manufacturing', 'White label dan private label kosmetik',
            'OEM dan ODM kosmetik', 'Custom formulation', 'Regulatory BPOM', 'Halal kosmetik',
            'Pengembangan kemasan kosmetik', 'Cosmetic science dan research',
        ],
        'sameAs' => $sSame,
    ];

    $sPhone = $sReal($meta->phone_number ?? null);
    $sEmail = $sReal($meta->email ?? null);
    if ($sPhone || $sEmail) {
        $sOrg['contactPoint'] = array_filter([
            '@type' => 'ContactPoint',
            'contactType' => 'customer service',
            'telephone' => $sPhone,
            'email' => $sEmail,
            'availableLanguage' => ['Indonesian', 'English'],
            'areaServed' => 'ID',
        ]);
    }

    if (in_array($sRoute, ['beranda', 'about', 'develop-with-us'], true)) {
        $sServices = [
            'Maklon Kosmetik', 'White Label / Private Label', 'OEM Kosmetik', 'ODM Kosmetik', 'Custom Formulation',
            'IPM (Intellectual Property Manufacturing)', 'OBM (Original Brand Manufacturing)', 'AI Product Concept',
            'Packaging Development', 'Testing & Validation', 'BPOM & Regulatory Support', 'Halal Support', 'Manufacturing',
        ];
        $sOrg['hasOfferCatalog'] = [
            '@type' => 'OfferCatalog',
            'name' => 'Layanan Lunaray',
            'itemListElement' => array_map(fn ($n) => [
                '@type' => 'Offer',
                'itemOffered' => ['@type' => 'Service', 'name' => $n, 'provider' => ['@id' => $sOrgId], 'areaServed' => 'ID'],
            ], $sServices),
        ];
    }

    $sSite = [
        '@type' => 'WebSite',
        '@id' => $sSiteId,
        'url' => $sOrigin . '/',
        'name' => 'Lunaray Beauty Factory',
        'inLanguage' => 'id-ID',
        'publisher' => ['@id' => $sOrgId],
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => ['@type' => 'EntryPoint', 'urlTemplate' => $sOrigin . '/search?qr={search_term_string}'],
            'query-input' => 'required name=search_term_string',
        ],
    ];

    $sTypes = ['about' => 'AboutPage', 'contact' => 'ContactPage', 'beautyversity' => 'CollectionPage'];
    $sPage = [
        '@type' => $sTypes[$sRoute] ?? 'WebPage',
        '@id' => $sPageUrl . '#webpage',
        'url' => $sPageUrl,
        'name' => $meta->meta_title ?? 'Lunaray Beauty Factory',
        'description' => $meta->meta_description ?? '',
        'inLanguage' => 'id-ID',
        'dateModified' => isset($sPages[$sRoute]) ? config('seo.pages_lastmod') : null,
        'isPartOf' => ['@id' => $sSiteId],
        'about' => ['@id' => $sOrgId],
        'publisher' => ['@id' => $sOrgId],
    ];
    $sPage = array_filter($sPage, fn ($v) => $v !== null);
    if ($sOg) {
        $sPage['primaryImageOfPage'] = ['@type' => 'ImageObject', 'url' => $sOg];
    }

    $sGraph = [$sOrg, $sSite, $sPage];

    $sShort = fn ($title) => trim(preg_split('~\s+[—|]\s+~u', $title)[0]);
    if ($sRoute && $sRoute !== 'beranda' && isset($sPages[$sRoute]) && ! $__env->hasSection('custom-breadcrumb')) {
        $crumbs = [['Beranda', $sOrigin . '/']];
        if (str_contains($sRoute, '.') && isset($sPages[explode('.', $sRoute)[0]])) {
            $parent = explode('.', $sRoute)[0];
            $crumbs[] = [$sShort($sPages[$parent]['title']), $sOrigin . parse_url(route($parent), PHP_URL_PATH)];
        }
        $crumbs[] = [$sShort($sPages[$sRoute]['title']), $sPageUrl];

        $sGraph[] = [
            '@type' => 'BreadcrumbList',
            '@id' => $sPageUrl . '#breadcrumb',
            'itemListElement' => array_map(fn ($c, $i) => [
                '@type' => 'ListItem', 'position' => $i + 1, 'name' => $c[0], 'item' => $c[1],
            ], $crumbs, array_keys($crumbs)),
        ];
        $sGraph[2]['breadcrumb'] = ['@id' => $sPageUrl . '#breadcrumb'];
    }
@endphp
<script type="application/ld+json">{!! json_encode(['@context' => 'https://schema.org', '@graph' => $sGraph], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP) !!}</script>
