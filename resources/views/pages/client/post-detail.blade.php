@extends('layouts.client.app')

@php
    // Calculate reading time (avg 200 words/min)
    $wordCount = str_word_count(strip_tags($post->content ?? ''));
    $readingTime = max(1, (int) ceil($wordCount / 200));

    // Tags are stored as ids; resolve them to names for display and schema keywords.
    $tagIds = is_array($post->tags)
        ? $post->tags
        : (is_string($post->tags) ? json_decode($post->tags, true) ?: [] : []);
    $postTags = \App\Models\PostTags::whereIn('id', $tagIds)->get(['name', 'slug']);
    $keywords = $postTags->pluck('name')->implode(', ');
    $isBeautyversity = $postTags->contains('slug', 'beautyversity');
    $publishedAt = $post->published_at ?? $post->created_at;
    $related = $relate->where('id', '!=', $post->id)->take(3);
    $shareUrl = urlencode(request()->fullUrl());

    // Editor content sometimes wraps a whole paragraph in a heading tag; only keep short lines as headings,
    // and never emit a second <h1> (the page title is the h1).
    $content = preg_replace_callback('~<h([1-6])\b([^>]*)>(.*?)</h\1>~is', function ($m) {
        $long = mb_strlen(trim(html_entity_decode(strip_tags($m[3])))) > 110;
        if ($long) return '<p' . $m[2] . '>' . $m[3] . '</p>';
        $level = $m[1] === '1' ? '2' : $m[1];
        return '<h' . $level . $m[2] . '>' . $m[3] . '</h' . $level . '>';
    }, $content ?? '');
@endphp

@section('custom-breadcrumb', '1')

@push('structured-data')
@php
    $ldOrigin = preg_match('~^(https?://[^/]+)~', $canonicalUrl ?? url('/'), $ldm) ? $ldm[1] : rtrim(url('/'), '/');
    $ldUrl = strtok(request()->fullUrl(), '?');
    if (in_array(request()->getHost(), config('seo.indexable_hosts'), true)) {
        $ldUrl = $ldOrigin . request()->getPathInfo();
    }
    $ldDesc = trim(preg_replace('/\s+/u', ' ', html_entity_decode(strip_tags($post->content ?? ''))));
    $ldImage = $post->image ? getFile($post->image) : null;
    $ldAuthor = $post->createdBy?->name ?? 'Tim Lunaray';
    $ldCrumbs = [['Beranda', $ldOrigin . '/']];
    if ($isBeautyversity) {
        $ldCrumbs[] = ['Beautyversity', $ldOrigin . '/beautyversity'];
    }
    if ($post->category) {
        $ldCrumbs[] = [$post->category->name, $isBeautyversity ? $ldOrigin . '/beautyversity?category=' . $post->category->slug : $ldOrigin . '/' . $post->category->slug];
    }
    $ldCrumbs[] = [$post->title, $ldUrl];
    $ldArticle = array_filter([
        '@type' => 'Article',
        '@id' => $ldUrl . '#article',
        'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $ldUrl],
        'headline' => mb_substr($post->title, 0, 110),
        'description' => mb_substr($ldDesc, 0, 300),
        'image' => $ldImage ? [$ldImage] : null,
        'datePublished' => $publishedAt->toIso8601String(),
        'dateModified' => ($post->updated_at ?? $publishedAt)->toIso8601String(),
        'author' => ['@type' => 'Person', 'name' => $ldAuthor],
        'publisher' => ['@id' => $ldOrigin . '/#organization'],
        'articleSection' => $post->category?->name,
        'keywords' => $keywords ?: null,
        'wordCount' => $wordCount,
        'timeRequired' => 'PT' . $readingTime . 'M',
        'inLanguage' => 'id-ID',
        'isAccessibleForFree' => true,
    ], fn ($v) => $v !== null);
    $ldFlags = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP;
@endphp
<script type="application/ld+json">{!! json_encode(['@context' => 'https://schema.org', '@graph' => [
    $ldArticle,
    [
        '@type' => 'BreadcrumbList',
        '@id' => $ldUrl . '#breadcrumb',
        'itemListElement' => array_map(fn ($c, $i) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $c[0], 'item' => $c[1]], $ldCrumbs, array_keys($ldCrumbs)),
    ],
]], $ldFlags) !!}</script>
@endpush

@section('content')
<div class="lr-article-page">

    <header class="lr-art-hero">
        <div class="bv-decor" aria-hidden="true">
            <img src="{{ asset('assets/img/lunaray/content/beautyversity-ring.webp') }}" alt="" loading="lazy">
        </div>
        <div class="lr-art-hero-inner">
            <nav class="lr-art-crumbs" aria-label="Breadcrumb">
                <a href="{{ route('beautyversity') }}">Beautyversity</a>
                @if ($post->category)
                    <span aria-hidden="true">/</span>
                    <a href="{{ route('beautyversity', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
                @endif
            </nav>

            <h1 class="lr-art-title">{{ $post->title }}</h1>

            <div class="lr-art-meta">
                <img src="{{ $post->createdBy?->image ? getFile($post->createdBy->image) : asset('assets/img/lunaray/brand/logo-lunaray.webp') }}" alt="" class="lr-art-avatar" width="44" height="44">
                <div>
                    <strong>{{ $post->createdBy?->name ?? 'Tim Lunaray' }}</strong>
                    <span>
                        <time datetime="{{ $publishedAt->toISOString() }}">{{ $publishedAt->locale('id')->translatedFormat('d F Y') }}</time>
                        &middot; {{ $readingTime }} menit baca
                    </span>
                </div>
            </div>
        </div>
    </header>

    <article class="lr-art{{ $post->image ? '' : ' lr-art--flat' }}">
        @if ($post->image)
            <figure class="lr-art-cover">
                <img src="{{ getFile($post->image) }}" alt="{{ $post->title }}" width="1200" height="630" fetchpriority="high" loading="eager">
            </figure>
        @endif

        <div class="lr-art-body">
            {!! $content !!}
        </div>

        <footer class="lr-art-footer">
            @if ($postTags->isNotEmpty())
                <ul class="lr-art-tags">
                    @foreach ($postTags as $tag)
                        <li><a href="{{ $tag->slug === 'beautyversity' ? route('beautyversity') : url('/tag/' . $tag->slug) }}">{{ $tag->name }}</a></li>
                    @endforeach
                </ul>
            @endif

            <div class="lr-art-share">
                <span>Share</span>
                <a href="https://wa.me/?text={{ urlencode($post->title . ' — ' . request()->fullUrl()) }}" target="_blank" rel="noopener" aria-label="Bagikan ke WhatsApp">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.1-1.8-.9-2-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.1-1.3-.5-2.4-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6l.4-.5.3-.5c.1-.2 0-.4 0-.5l-.9-2.2c-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.1.2 2.1 3.2 5.1 4.5 2.5 1 3 .8 3.6.7.6-.1 1.8-.7 2-1.4.2-.7.2-1.3.2-1.4-.1-.2-.3-.3-.6-.4ZM12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Z"/></svg>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}" target="_blank" rel="noopener" aria-label="Bagikan ke LinkedIn">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.4 20.5h-3.6v-5.6c0-1.3 0-3-1.8-3s-2.1 1.4-2.1 2.9v5.7H9.4V9h3.4v1.6c.5-.9 1.6-1.8 3.4-1.8 3.6 0 4.3 2.4 4.3 5.5v6.2ZM5.3 7.4a2.1 2.1 0 1 1 0-4.2 2.1 2.1 0 0 1 0 4.2ZM7.1 20.5H3.6V9h3.5v11.5Z"/></svg>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" rel="noopener" aria-label="Bagikan ke Facebook">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 21.9v-7h2.3l.4-2.8h-2.7V10.3c0-.8.2-1.3 1.4-1.3h1.4V6.5c-.3 0-1.1-.1-2.1-.1-2.1 0-3.5 1.3-3.5 3.6v2.1H8.4v2.8h2.3v7A10 10 0 1 1 13.5 21.9Z"/></svg>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ urlencode($post->title) }}" target="_blank" rel="noopener" aria-label="Bagikan ke X">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.8 3h3.1l-6.8 7.7 8 10.3h-6.2l-4.9-6.3L5.4 21H2.3l7.2-8.3L1.8 3h6.4l4.4 5.8L17.8 3Zm-1.1 16.2h1.7L7.4 4.7H5.6l11.1 14.5Z"/></svg>
                </a>
                <button type="button" class="lr-art-copy" data-url="{{ request()->fullUrl() }}" aria-label="Salin tautan">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.5.5l3-3a5 5 0 0 0-7-7l-1.7 1.7"/><path d="M14 11a5 5 0 0 0-7.5-.5l-3 3a5 5 0 0 0 7 7l1.7-1.7"/></svg>
                    <em>Tautan disalin</em>
                </button>
            </div>

            <div class="lr-art-author">
                <img src="{{ $post->createdBy?->image ? getFile($post->createdBy->image) : asset('assets/img/lunaray/brand/logo-lunaray.webp') }}" alt="" width="64" height="64">
                <div>
                    <span>Ditulis oleh</span>
                    <strong>{{ $post->createdBy?->name ?? 'Tim Lunaray' }}</strong>
                    <p>{{ $post->createdBy?->bio ?: 'Tim Lunaray Beauty Factory — menghubungkan science, research, dan manufacturing untuk pengembangan produk kosmetik yang lebih baik.' }}</p>
                </div>
            </div>
        </footer>
    </article>

    <section class="bv-section lr-art-more">
        <div class="bv-inner">
            <div class="lr-art-more-head">
                <div class="lunaray-hero-text--light">
                    <div class="hero-eyebrow"><span class="eyebrow-dash"></span>{{ $isBeautyversity ? 'Beautyversity' : 'Insights' }}</div>
                    <h2 class="hero-heading">
                        <span class="hero-heading-bold">Continue</span>
                        <span class="hero-heading-accent-bold">Reading.</span>
                    </h2>
                </div>
                <a href="{{ route('beautyversity') }}" class="lr-art-all">
                    <span>Semua Artikel</span>
                    <svg width="14" height="14" viewBox="0 -960 960 960" fill="currentColor"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                </a>
            </div>

            @if ($related->isNotEmpty())
                <div class="bv-cards bvp-cards">
                    @foreach ($related as $item)
                        <a href="{{ url('/' . ($item->category?->slug ?? 'beautyversity') . '/' . $item->slug) }}" class="bv-card">
                            <div class="bv-card-media">
                                <img src="{{ $item->image ? getFile($item->image) : asset('assets/img/lunaray/content/beautyversity-card-skin.webp') }}" alt="{{ $item->title }}" loading="lazy">
                            </div>
                            <div class="bv-card-body">
                                <div class="bv-card-row">
                                    <span class="bv-card-category">{{ $item->category?->name ?? 'Beautyversity' }}</span>
                                    <span class="bv-card-index">{{ sprintf('%02d', $loop->iteration) }}<span class="bv-card-index-dash"></span></span>
                                </div>
                                <h3 class="bv-card-title">{{ $item->title }}</h3>
                                <p class="bv-card-excerpt">{{ Str::limit(strip_tags($item->content), 130) }}</p>
                                <span class="bv-card-cta">Read Article
                                    <svg width="14" height="14" viewBox="0 -960 960 960" fill="currentColor"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <p class="lr-art-empty">Artikel lain akan segera hadir. Jelajahi seluruh koleksi Beautyversity untuk insight terbaru dari Lunaray.</p>
            @endif
        </div>
    </section>

</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-beranda.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-beranda.css')) }}">
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-article.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-article.css')) }}">
@endpush

@push('scripts')
<script>
    document.querySelectorAll('.lr-art-copy').forEach(function (btn) {
        btn.addEventListener('click', function () {
            navigator.clipboard.writeText(btn.dataset.url).then(function () {
                btn.classList.add('is-copied');
                setTimeout(function () { btn.classList.remove('is-copied'); }, 1800);
            });
        });
    });
</script>
@endpush
