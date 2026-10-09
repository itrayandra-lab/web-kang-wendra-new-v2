@extends('layouts.client.app')

@section('content')

@php
    $img = fn (string $key) => asset('assets/img/lunaray/capabilities/cap-' . $key . '.webp');
    $ctaHref = route('beranda') . '#start-development';
@endphp

<div class="cap-page">

    {{-- ===== Hero: From Product Ideas to Real Cosmetic Products ===== --}}
    <section class="cap-hero" aria-labelledby="cap-hero-title">
        <div class="cap-wrap">
            <div class="cap-hero-grid">
                <div class="cap-hero-text">
                    <div class="cap-eyebrow"><span class="cap-eyebrow-dash"></span>Capabilities · Regular Care</div>
                    @include('pages.client.capabilities.partials.title', ['tag' => 'h1', 'id' => 'cap-hero-title', 'lines' => ['From Product Ideas', 'to Real Cosmetic Products.']])
                    <p class="cap-kicker">A broad range of cosmetic development &amp; manufacturing capabilities.</p>
                    <p class="cap-body">Lunaray membantu founder, brand, dan perusahaan mengembangkan serta memproduksi berbagai kategori produk kosmetik. Setiap kategori dapat dikembangkan melalui jalur yang berbeda sesuai titik awal proyek, kebutuhan konsumen, arah produk, dan tingkat pengembangan yang dibutuhkan.</p>
                </div>
                <div class="cap-hero-aside">
                    <p class="cap-hero-quote">Your vision, our formulation, real impact.</p>
                    <ul class="cap-hero-tags">
                        <li>Science</li>
                        <li>People</li>
                        <li>Formulation</li>
                        <li>Manufacturing</li>
                        <li>Brands</li>
                    </ul>
                </div>
            </div>

            <nav class="cap-arches" aria-label="Kategori produk">
                @foreach ($categories as $cat)
                    <a class="cap-arch cap-arch--{{ $cat['theme'] ?? 'light' }}" href="#cap-{{ $cat['id'] }}">
                        <span class="cap-arch-img"><img src="{{ $img($cat['arch']) }}" alt="" width="212" height="292" decoding="async"></span>
                        <span class="cap-arch-name">{{ $cat['name'] }}</span>
                        <span class="cap-arch-items">{{ implode(' · ', $cat['archItems']) }}</span>
                    </a>
                @endforeach
            </nav>

            <ul class="cap-pillars">
                @foreach ($pillars as $pillar)
                    <li>
                        <span class="cap-pillar-bubble">@include('pages.client.capabilities.partials.icon', ['name' => $pillar['icon']])</span>
                        <div>
                            <strong>{{ $pillar['title'] }}</strong>
                            <span>{{ $pillar['desc'] }}</span>
                        </div>
                    </li>
                @endforeach
            </ul>

            <div class="cap-signoff">
                <span>Lunaray <i></i> Cosmetic by Science</span>
                <span>Different categories. Different needs. One development ecosystem.</span>
            </div>
        </div>
    </section>

    {{-- ===== Sticky category jump nav ===== --}}
    <nav class="cap-subnav" aria-label="Lompat ke kategori">
        <div class="cap-subnav-inner">
            @foreach ($categories as $cat)
                <a href="#cap-{{ $cat['id'] }}" data-cap-target="cap-{{ $cat['id'] }}">{{ $cat['name'] }}</a>
            @endforeach
        </div>
    </nav>

    {{-- ===== Categories ===== --}}
    @foreach ($categories as $cat)
        <section class="cap-cat cap-cat--{{ $cat['theme'] ?? 'light' }} cap-cat--{{ $cat['id'] }}" id="cap-{{ $cat['id'] }}" aria-labelledby="cap-{{ $cat['id'] }}-title">
            @if ($cat['need'])
                @include('pages.client.capabilities.partials.need', ['block' => $cat['need']])
            @endif
            @include('pages.client.capabilities.partials.format', ['block' => $cat['format']])
        </section>
    @endforeach

</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-capabilities.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-capabilities.css')) }}">
@endpush

@push('structured-data')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Maklon & Pengembangan Produk Kosmetik — Regular Capabilities',
    'serviceType' => 'Cosmetic contract manufacturing (OEM, ODM, OBM, IPM)',
    'provider' => ['@type' => 'Organization', 'name' => 'Lunaray Beauty Factory', 'url' => url('/')],
    'areaServed' => 'ID',
    'url' => route('capabilities'),
    'description' => 'Lunaray membantu founder, brand, dan perusahaan mengembangkan serta memproduksi skincare, body care, hair care, men’s care, baby & kids care, personal care, fragrance, dan decorative cosmetics.',
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Kategori produk kosmetik',
        'itemListElement' => collect($categories)->map(fn ($cat) => [
            '@type' => 'OfferCatalog',
            'name' => $cat['name'],
            'url' => route('capabilities') . '#cap-' . $cat['id'],
            'itemListElement' => collect($cat['format']['layout'] === 'panels' ? $cat['format']['formats']['items'] : $cat['format']['cards'])
                ->map(fn ($item) => ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $cat['name'] . ' — ' . $item[1]]])
                ->values(),
        ])->values(),
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@push('scripts')
<script>
    (function () {
        var links = document.querySelectorAll('.cap-subnav [data-cap-target]');
        if (!links.length || !('IntersectionObserver' in window)) return;
        var byId = {};
        links.forEach(function (a) { byId[a.getAttribute('data-cap-target')] = a; });
        var scroller = document.querySelector('.cap-subnav-inner');

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                links.forEach(function (a) { a.classList.remove('is-active'); });
                var active = byId[entry.target.id];
                if (!active) return;
                active.classList.add('is-active');
                // Keep the active chip visible when the chip row scrolls horizontally on mobile.
                if (scroller && scroller.scrollWidth > scroller.clientWidth) {
                    scroller.scrollTo({ left: active.offsetLeft - 16, behavior: 'smooth' });
                }
            });
        }, { rootMargin: '-45% 0px -50% 0px' });

        Object.keys(byId).forEach(function (id) {
            var section = document.getElementById(id);
            if (section) observer.observe(section);
        });
    })();
</script>
@endpush
