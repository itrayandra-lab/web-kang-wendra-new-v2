@extends('layouts.client.app')

@section('content')

@php
    $img = fn (string $key) => asset('assets/img/lunaray/capabilities/beyond/byd-' . $key . '.webp');
    $icon = 'pages.client.capabilities.partials.icon';
@endphp

<div class="cap-page byd-page">

    {{-- ===== Hero: Beyond Cosmetics. More Ways to Build Your Brand. =====
         One section over one photo, like the design: headline column top-left
         over the photo's empty side, then the category cards and the brand
         statement bar sitting on the photo's floor area below the products. --}}
    <section class="byd-hero" id="beyond-cosmetics" aria-labelledby="byd-hero-title">
        <div class="byd-hero-media">
            <img src="{{ $img($hero['photo']) }}" alt="{{ $hero['photoAlt'] }}" fetchpriority="high">
        </div>
        <div class="byd-hero-scrim"></div>
        <div class="byd-hero-inner">
            <div class="byd-hero-text">
                <div class="byd-hero-top">
                    <div class="byd-brand">
                        <strong>{{ Str::upper($hero['brand']) }}</strong>
                        <span>{{ Str::upper($hero['brandTag']) }}</span>
                    </div>
                    <i class="byd-hero-top-rule"></i>
                    <span class="byd-hero-eyebrow">{{ Str::upper($hero['eyebrow']) }}</span>
                </div>
                <h1 class="byd-hero-title" id="byd-hero-title">
                    @foreach ($hero['title'] as $i => $line)
                        <span class="{{ in_array($i, $hero['accent'], true) ? 'byd-hero-accent' : '' }}">{{ $line }}</span>
                    @endforeach
                </h1>
                <p class="byd-hero-kicker">{{ $hero['kicker'] }}</p>
                <p class="byd-hero-body">{{ $hero['body'] }}</p>
            </div>

            <ul class="byd-cats">
                @foreach ($categories as [$cIcon, $cTitle, $cDesc, $cAnchor])
                    <li>
                        @if ($cAnchor)
                            <a href="#{{ $cAnchor }}" class="byd-cat-link" aria-label="Lihat {{ $cTitle }}">
                        @endif
                        <span class="byd-bubble">@include($icon, ['name' => $cIcon])</span>
                        <strong>{{ $cTitle }}</strong>
                        <span class="byd-cat-line"></span>
                        <span>{{ $cDesc }}</span>
                        @if ($cAnchor)
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>

            <div class="byd-footer-bar">
                <p class="byd-tagline">
                    @foreach ($closing['tagline'] as $line)
                        <span>{{ Str::upper($line) }}</span>
                    @endforeach
                </p>
                <div class="byd-footer-brand">
                    <strong>{{ Str::upper($hero['brand']) }}</strong>
                    <span>{{ Str::upper($hero['brandTag']) }}</span>
                </div>
                <ul class="byd-stats">
                    @foreach ($closing['stats'] as [$sIcon, $sTop, $sBottom])
                        <li>
                            @include($icon, ['name' => $sIcon, 'class' => 'byd-stat-icon'])
                            <span>{{ Str::upper($sTop) }}<br>{{ Str::upper($sBottom) }}</span>
                        </li>
                    @endforeach
                </ul>
                <a href="#beyond-ecosystem" class="byd-cta">
                    <span>{{ Str::upper($closing['cta']) }}</span>
                    @include($icon, ['name' => 'arrow-down', 'class' => 'cap-btn-icon', 'stroke' => 1.6])
                </a>
            </div>
        </div>
    </section>

    {{-- ===== Category panels: true full-bleed scene photos (edge-to-edge, like
         the site's home hero) with the copy laid over the glass panel already
         drawn into each photo — no added card border/shadow of our own. A
         tighter portrait crop takes over below the tablet breakpoint, where the
         desktop photo's panel would shrink to a sliver. ===== --}}
    <div id="beyond-ecosystem"></div>
    @foreach ($panels as $panel)
        @php
            [$pTop, $pRight, $pBottom, $pLeft] = $panel['panelBounds'];
            [$cTop, $cRight, $cBottom, $cLeft] = $panel['ctaBounds'];
            [$mpTop, $mpRight, $mpBottom, $mpLeft] = $panel['panelBoundsMobile'];
            [$mcTop, $mcRight, $mcBottom, $mcLeft] = $panel['ctaBoundsMobile'];
            $panelStyle = "--byd-panel-top:{$pTop}%;--byd-panel-right:{$pRight}%;--byd-panel-bottom:{$pBottom}%;--byd-panel-left:{$pLeft}%;"
                . "--byd-cta-top:{$cTop}%;--byd-cta-right:{$cRight}%;--byd-cta-bottom:{$cBottom}%;--byd-cta-left:{$cLeft}%;"
                . "--byd-mpanel-top:{$mpTop}%;--byd-mpanel-right:{$mpRight}%;--byd-mpanel-bottom:{$mpBottom}%;--byd-mpanel-left:{$mpLeft}%;"
                . "--byd-mcta-top:{$mcTop}%;--byd-mcta-right:{$mcRight}%;--byd-mcta-bottom:{$mcBottom}%;--byd-mcta-left:{$mcLeft}%;";
        @endphp
        <section class="byd-panel-section" id="{{ $panel['id'] }}" aria-labelledby="{{ $panel['id'] }}-title" style="{{ $panelStyle }}">
            <picture class="byd-panel-media">
                <source media="(max-width: 899px)" srcset="{{ $img($panel['photoMobile']) }}">
                <img src="{{ $img($panel['photo']) }}" alt="{{ $panel['photoAlt'] }}" width="1672" height="941" loading="lazy" decoding="async">
            </picture>

            <div class="byd-panel-content">
                <div class="cap-eyebrow"><span class="cap-eyebrow-dash"></span>{{ Str::upper($panel['eyebrow']) }}</div>
                <h2 class="byd-panel-title" id="{{ $panel['id'] }}-title">
                    @foreach ($panel['title'] as $i => $line)
                        <span class="{{ $i % 2 === 1 ? 'byd-panel-accent' : '' }}">{{ Str::upper($line) }}</span>
                    @endforeach
                </h2>
                @isset($panel['kicker'])
                    <p class="byd-panel-kicker">{{ Str::upper($panel['kicker']) }}</p>
                @endisset
                <p class="byd-panel-subhead">{{ $panel['subhead'] }}</p>
                @foreach ($panel['body'] as $para)
                    <p class="byd-panel-body">{{ $para }}</p>
                @endforeach
                @isset($panel['tags'])
                    <p class="byd-panel-tags">{{ Str::upper(implode(' · ', $panel['tags'])) }}</p>
                @endisset
                @isset($panel['note'])
                    <p class="byd-panel-note">{{ $panel['note'] }}</p>
                @endisset
            </div>

            <div class="byd-panel-cta">
                <a href="{{ route('beranda') }}#start-development">
                    <span>{{ $panel['cta'] }}</span>
                    @include($icon, ['name' => 'arrow', 'class' => 'cap-btn-icon', 'stroke' => 2])
                </a>
            </div>
        </section>
    @endforeach

    {{-- ===== Closing banner: One Development Ecosystem. More Ways to Build. =====
         The photo already leaves a gap above its drawn pill for a short
         headline + subhead; the longer supporting copy runs in a plain block
         underneath since it wouldn't fit that gap. Category labels under each
         product cluster and the corner taglines are baked into the photo. --}}
    @php
        [$fTop, $fRight, $fBottom, $fLeft] = $finalBanner['contentBounds'];
        [$fcTop, $fcRight, $fcBottom, $fcLeft] = $finalBanner['ctaBounds'];
        $finalStyle = "--byd-final-top:{$fTop}%;--byd-final-right:{$fRight}%;--byd-final-bottom:{$fBottom}%;--byd-final-left:{$fLeft}%;"
            . "--byd-final-cta-top:{$fcTop}%;--byd-final-cta-right:{$fcRight}%;--byd-final-cta-bottom:{$fcBottom}%;--byd-final-cta-left:{$fcLeft}%;";
    @endphp
    <section class="byd-panel-section byd-final-section" id="one-development-ecosystem" aria-labelledby="byd-final-title" style="{{ $finalStyle }}">
        <picture class="byd-panel-media">
            <img src="{{ $img($finalBanner['photo']) }}" alt="{{ $finalBanner['photoAlt'] }}" width="1672" height="941" loading="lazy" decoding="async">
        </picture>

        <div class="byd-panel-content byd-final-content">
            <h2 class="byd-panel-title byd-final-title" id="byd-final-title">
                @foreach ($finalBanner['title'] as $i => $line)
                    <span class="{{ $i % 2 === 1 ? 'byd-panel-accent' : '' }}">{{ Str::upper($line) }}</span>
                @endforeach
            </h2>
            <p class="byd-panel-subhead">{{ $finalBanner['subhead'] }}</p>
        </div>

        <div class="byd-panel-cta byd-final-cta">
            <a href="{{ route('beranda') }}#start-development">
                <span>{{ $finalBanner['cta'] }}</span>
                @include($icon, ['name' => 'arrow', 'class' => 'cap-btn-icon', 'stroke' => 2])
            </a>
        </div>

        {{-- The gap above the pill is centered and fairly short, so at mobile
             widths it can't be cropped-and-zoomed the way the side panels are
             (zooming in would just shrink the gap further, not enlarge it).
             Show the photo plain there instead, with the same headline/subhead
             and a matching CTA in normal flow below it. --}}
        <div class="byd-final-stack">
            <h2 class="byd-panel-title byd-final-title">
                @foreach ($finalBanner['title'] as $i => $line)
                    <span class="{{ $i % 2 === 1 ? 'byd-panel-accent' : '' }}">{{ Str::upper($line) }}</span>
                @endforeach
            </h2>
            <p class="byd-panel-subhead">{{ $finalBanner['subhead'] }}</p>
            <a href="{{ route('beranda') }}#start-development" class="cap-btn">
                <span>{{ Str::upper($finalBanner['cta']) }}</span>
                @include($icon, ['name' => 'arrow', 'class' => 'cap-btn-icon', 'stroke' => 2])
            </a>
        </div>
    </section>

    <div class="cap-wrap byd-final-note-wrap">
        @foreach ($finalBanner['body'] as $para)
            <p class="cap-body byd-final-body">{{ $para }}</p>
        @endforeach
        <p class="byd-final-note">{{ $finalBanner['note'] }}</p>
    </div>

</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-capabilities.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-capabilities.css')) }}">
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-beyond.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-beyond.css')) }}">
@endpush

@push('structured-data')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Beyond Cosmetics — Extended Manufacturing Ecosystem',
    'serviceType' => 'Beauty-from-within, wellness, PKRT, medical device & herbal product development',
    'provider' => ['@type' => 'Organization', 'name' => 'Lunaray Beauty Factory', 'url' => url('/')],
    'areaServed' => 'ID',
    'url' => route('capabilities.beyond'),
    'description' => $hero['body'],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Beyond cosmetics categories',
        'itemListElement' => collect($categories)->map(fn ($cat) => [
            '@type' => 'Offer',
            'itemOffered' => ['@type' => 'Service', 'name' => $cat[1], 'description' => $cat[2]],
        ])->values(),
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush
