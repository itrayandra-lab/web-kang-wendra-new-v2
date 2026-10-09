@extends('layouts.client.app')

@section('content')

@php
    $img = fn (string $key) => asset('assets/img/lunaray/capabilities/specialty/spc-' . $key . '.webp');
    $ctaHref = route('beranda') . '#start-development';
    $icon = 'pages.client.capabilities.partials.icon';
@endphp

<div class="cap-page spc-page">

    {{-- ===== Hero: When Deeper Knowledge Creates Real Possibilities ===== --}}
    <section class="spc-hero" aria-labelledby="spc-hero-title">
        <div class="cap-wrap">
            <div class="spc-hero-grid">
                <div class="spc-hero-text">
                    <div class="cap-eyebrow"><span class="cap-eyebrow-dash"></span>{{ $hero['eyebrow'] }}</div>
                    @include('pages.client.capabilities.partials.spc-title', ['tag' => 'h1', 'id' => 'spc-hero-title', 'lines' => $hero['title']])
                    <p class="spc-kicker">{{ $hero['kicker'] }}</p>
                    <p class="spc-body">{{ $hero['body'] }}</p>
                </div>
                <figure class="spc-hero-media">
                    <img src="{{ $img($hero['photo']) }}" alt="{{ $hero['photoAlt'] }}" width="757" height="485" fetchpriority="high">
                    @include('pages.client.capabilities.partials.spc-script', ['lines' => $hero['script'], 'class' => 'spc-script--hero'])
                    <ul class="spc-hero-aside" aria-label="Tahapan">
                        @foreach ($hero['aside'] as $word)
                            <li>{{ $word }}</li>
                        @endforeach
                    </ul>
                </figure>
            </div>

            <ol class="spc-flow">
                @foreach ($hero['flow'] as [$fIcon, $fTitle, $fItems])
                    <li>
                        <span class="spc-bubble">@include($icon, ['name' => $fIcon])</span>
                        <div>
                            <strong>{{ $fTitle }}</strong>
                            @foreach ($fItems as $fItem)
                                <span>{{ $fItem }}</span>
                            @endforeach
                        </div>
                    </li>
                @endforeach
            </ol>

            <nav class="spc-cats" aria-label="Kategori specialty care">
                @foreach ($categories as $cat)
                    <a class="spc-cat-card" href="#spc-{{ $cat['id'] }}">
                        <span class="spc-cat-card-img"><img src="{{ $img($cat['card']['img']) }}" alt="" width="353" height="156" loading="lazy" decoding="async"></span>
                        <span class="spc-cat-card-body">
                            <strong>{{ $cat['name'] }}</strong>
                            <span>{{ $cat['card']['desc'] }}</span>
                        </span>
                        <span class="spc-cat-card-foot">
                            <em>{{ $cat['card']['tag'] }}</em>
                            <span class="spc-cat-card-arrow">@include($icon, ['name' => 'arrow', 'stroke' => 2])</span>
                        </span>
                    </a>
                @endforeach
            </nav>

            <div class="spc-signoff">
                <span>Lunaray <i></i> Cosmetic by Science</span>
                <span>{{ $hero['signoff'] }}</span>
            </div>
        </div>
    </section>

    {{-- ===== Sticky jump nav ===== --}}
    <nav class="cap-subnav" aria-label="Lompat ke bagian">
        <div class="cap-subnav-inner">
            <a href="#spc-pathway" data-cap-target="spc-pathway">IPM Pathway</a>
            @foreach ($categories as $cat)
                <a href="#spc-{{ $cat['id'] }}" data-cap-target="spc-{{ $cat['id'] }}">{{ $cat['short'] }}</a>
            @endforeach
        </div>
    </nav>

    {{-- ===== From Knowledge to Specialized Products (IPM pathway) ===== --}}
    <section class="spc-section spc-pathway" id="spc-pathway" aria-labelledby="spc-pathway-title">
        <div class="cap-wrap">
            <div class="spc-pathway-head">
                <div>
                    <div class="cap-eyebrow"><span class="cap-eyebrow-dash"></span>{{ $pathway['eyebrow'] }}</div>
                    @include('pages.client.capabilities.partials.spc-title', ['id' => 'spc-pathway-title', 'lines' => $pathway['title']])
                    <p class="spc-kicker">{{ $pathway['kicker'] }}</p>
                    <p class="spc-body">{!! $pathway['body'] !!}</p>
                </div>
                <ul class="spc-side-words">
                    @foreach ($pathway['aside'] as $word)
                        <li>{{ $word }}</li>
                    @endforeach
                </ul>
            </div>

            <ol class="spc-steps">
                @foreach ($pathway['steps'] as $i => [$sImg, $sTitle, $sDesc])
                    <li class="spc-step">
                        <div class="spc-step-head">
                            <span class="spc-step-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <h3>{{ $sTitle }}</h3>
                        </div>
                        <img src="{{ $img($sImg) }}" alt="" width="285" height="195" loading="lazy" decoding="async">
                        <p>{{ $sDesc }}</p>
                    </li>
                @endforeach
            </ol>

            @include('pages.client.capabilities.partials.spc-experts', ['experts' => $pathway['ecosystem'], 'closing' => $pathway['ecosystem']['closing']])
        </div>
    </section>

    {{-- ===== Categories ===== --}}
    @foreach ($categories as $cat)
        @php $need = $cat['need']; $sol = $cat['solutions']; @endphp
        <section class="spc-section spc-cat spc-cat--{{ $loop->index % 2 ? 'b' : 'a' }}" id="spc-{{ $cat['id'] }}" aria-labelledby="spc-{{ $cat['id'] }}-title">

            {{-- Need --}}
            <div class="spc-block">
                <div class="cap-wrap">
                    <div class="spc-need">
                        <figure class="spc-portrait">
                            <img src="{{ $img($need['photo']) }}" alt="{{ $need['photoAlt'] }}" loading="lazy" decoding="async">
                            @include('pages.client.capabilities.partials.spc-script', ['lines' => $need['script'] ?? []])
                        </figure>
                        <div class="spc-need-text">
                            <div class="spc-need-top">
                                <div>
                                    <div class="cap-eyebrow"><span class="cap-eyebrow-dash"></span>{{ $cat['name'] }}</div>
                                    @include('pages.client.capabilities.partials.spc-title', ['id' => 'spc-' . $cat['id'] . '-title', 'lines' => $need['title'], 'accent' => $need['accent'] ?? 1])
                                </div>
                                @if (!empty($need['aside']))
                                    <ul class="spc-side-words">
                                        @foreach ($need['aside'] as $word)
                                            <li>{{ $word }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            <p class="spc-kicker">{{ $need['kicker'] }}</p>
                            @foreach ($need['body'] as $para)
                                <p class="spc-body">{{ $para }}</p>
                            @endforeach

                            @if (!empty($need['visual']))
                                <figure class="spc-visual">
                                    <img src="{{ $img($need['visual'][0]) }}" alt="{{ $need['visual'][1] }}" loading="lazy" decoding="async">
                                    @if (!empty($need['visualLabels']))
                                        <figcaption>
                                            @foreach ($need['visualLabels'] as $label)
                                                <span>{{ $label }}</span>
                                            @endforeach
                                        </figcaption>
                                    @endif
                                </figure>
                            @endif
                        </div>
                    </div>

                    @if (!empty($need['areas']))
                        <ul class="spc-areas">
                            @foreach ($need['areas'] as [$aImg, $aIcon, $aTitle, $aItems])
                                <li>
                                    <div class="spc-areas-head">
                                        <span class="spc-bubble spc-bubble--sm">@include($icon, ['name' => $aIcon])</span>
                                        <h3>{{ $aTitle }}</h3>
                                    </div>
                                    <img src="{{ $img($aImg) }}" alt="Close-up kulit: {{ $aTitle }}" width="122" height="122" loading="lazy" decoding="async">
                                    <ul class="spc-bullets">
                                        @foreach ($aItems as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <ul class="spc-needs spc-needs--{{ count($need['needs']) }}">
                            @foreach ($need['needs'] as [$nIcon, $nTitle, $nDesc])
                                <li>
                                    <span class="spc-bubble spc-bubble--lg">@include($icon, ['name' => $nIcon])</span>
                                    <h3>{{ $nTitle }}</h3>
                                    <p>{{ $nDesc }}</p>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    @include('pages.client.capabilities.partials.spc-experts', ['experts' => $need['experts']])
                </div>
            </div>

            {{-- Solutions --}}
            <div class="spc-block spc-block--solutions">
                <div class="cap-wrap">
                    <div class="spc-sol-head">
                        <div class="spc-sol-text">
                            <div class="cap-eyebrow"><span class="cap-eyebrow-dash"></span>{{ $cat['name'] }} · Solutions</div>
                            @include('pages.client.capabilities.partials.spc-title', ['lines' => $sol['title']])
                            <p class="spc-kicker">{{ $sol['kicker'] }}</p>
                            @foreach ($sol['body'] as $para)
                                <p class="spc-body">{{ $para }}</p>
                            @endforeach
                        </div>
                        <figure class="spc-products">
                            <img src="{{ $img($sol['photo']) }}" alt="{{ $sol['photoAlt'] }}" loading="lazy" decoding="async">
                            @include('pages.client.capabilities.partials.spc-script', ['lines' => $sol['script'] ?? [], 'class' => 'spc-script--products'])
                        </figure>
                    </div>

                    <ul class="spc-sol-cards spc-sol-cards--{{ count($sol['cards']) }} {{ !empty($sol['compact']) ? 'spc-sol-cards--compact' : '' }}">
                        @foreach ($sol['cards'] as $card)
                            @php [$cIcon, $cTitle, $cDesc, $cItems] = $card; $cTex = $card[4] ?? null; $cSub = $card[5] ?? null; $cAreas = $card[6] ?? null; @endphp
                            <li class="spc-sol-card">
                                <div class="spc-sol-card-head">
                                    <span class="spc-bubble">@include($icon, ['name' => $cIcon])</span>
                                    <div>
                                        <h3>{{ $cTitle }}</h3>
                                        @if ($cSub)
                                            <p class="spc-sol-card-sub">{{ $cSub }}</p>
                                        @endif
                                    </div>
                                </div>
                                <p class="spc-sol-card-desc">{{ $cDesc }}</p>
                                <div class="spc-sol-card-foot {{ $cTex ? 'spc-sol-card-foot--tex' : '' }}">
                                    <ul class="spc-bullets">
                                        @foreach ($cItems as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                    @if ($cTex)
                                        <img class="spc-sol-card-tex" src="{{ $img($cTex) }}" alt="" loading="lazy" decoding="async">
                                    @endif
                                </div>
                                @if ($cAreas)
                                    <p class="spc-sol-card-areas">
                                        @foreach ($cAreas as $area)
                                            <span>{{ $area }}</span>
                                        @endforeach
                                    </p>
                                @endif
                            </li>
                        @endforeach
                    </ul>

                    @include('pages.client.capabilities.partials.spc-experts', ['experts' => $sol['experts']])

                    <div class="spc-signoff">
                        <span>Lunaray <i></i> Cosmetic by Science</span>
                        <span>{{ $cat['signoff'] }}</span>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    {{-- ===== Closing CTA ===== --}}
    <section class="spc-closing" aria-labelledby="spc-closing-title">
        <div class="cap-wrap">
            <div class="spc-closing-inner">
                <div>
                    <div class="cap-eyebrow"><span class="cap-eyebrow-dash"></span>Specialty Care</div>
                    @include('pages.client.capabilities.partials.spc-title', ['id' => 'spc-closing-title', 'lines' => ['Have a Specific Need', 'in Mind?']])
                    <p class="spc-body">Ceritakan kebutuhan khusus, target konsumen, atau insight riset yang Anda miliki. Tim Lunaray akan membantu menghubungkan expert yang relevan dan menentukan jalur pengembangan yang paling tepat.</p>
                </div>
                <div class="spc-closing-actions">
                    <a href="{{ $ctaHref }}" class="cap-btn">
                        <span>Discuss Your Specialty Idea</span>
                        @include($icon, ['name' => 'arrow', 'class' => 'cap-btn-icon', 'stroke' => 2])
                    </a>
                    <a href="{{ route('capabilities') }}" class="spc-link">
                        Lihat Regular Capabilities
                        @include($icon, ['name' => 'arrow', 'class' => 'cap-btn-icon', 'stroke' => 2])
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-capabilities.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-capabilities.css')) }}">
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-specialty.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-specialty.css')) }}">
@endpush

@push('structured-data')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Specialty Care Cosmetic Development — IPM (Intellectual Property Manufacturing)',
    'serviceType' => 'Specialty cosmetic product development and contract manufacturing',
    'provider' => ['@type' => 'Organization', 'name' => 'Lunaray Beauty Factory', 'url' => url('/')],
    'areaServed' => 'ID',
    'url' => route('capabilities.specialty'),
    'description' => $hero['body'],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Specialty care categories',
        'itemListElement' => collect($categories)->map(fn ($cat) => [
            '@type' => 'OfferCatalog',
            'name' => $cat['name'],
            'description' => $cat['card']['desc'],
            'url' => route('capabilities.specialty') . '#spc-' . $cat['id'],
            'itemListElement' => collect($cat['solutions']['cards'])
                ->map(fn ($card) => ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $cat['name'] . ' — ' . $card[1], 'description' => $card[2]]])
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
