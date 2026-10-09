@extends('layouts.client.app')

@section('content')
    <section class="bv-section bvp-hero">
        <div class="bv-decor" aria-hidden="true">
            <img src="{{ asset('assets/img/lunaray/content/beautyversity-ring.webp') }}" alt="" loading="lazy">
        </div>

        <div class="bv-inner">
            <div class="bv-header bvp-header">
                <div class="bv-header-main lunaray-hero-text--light">
                    <div class="hero-eyebrow"><span class="eyebrow-dash"></span>Beautyversity</div>
                    <h1 class="hero-heading">
                        <span class="hero-heading-bold">All Our Knowledge.<br></span>
                        <span class="hero-heading-accent-bold">One Living Library.</span>
                    </h1>
                </div>

                <p class="bv-header-body">Cosmetic science, formulation, product development, market intelligence, dan perkembangan beauty industry &mdash; dikelompokkan berdasarkan kategori pengetahuan.</p>

                <div class="bv-header-micro">
                    <ul class="bv-micro-col">
                        <li>{{ $posts->total() }} Article{{ $posts->total() === 1 ? '' : 's' }}</li>
                        <li>{{ $categories->count() }} Categor{{ $categories->count() === 1 ? 'y' : 'ies' }}</li>
                    </ul>
                    <ul class="bv-micro-col bv-micro-col--accent">
                        <li>Real Knowledge</li>
                        <li>Real Impact</li>
                    </ul>
                </div>
            </div>

            <ul class="bvp-tabs">
                <li>
                    <a href="{{ route('beautyversity') }}" class="{{ !$activeCategory ? 'active' : '' }}">All</a>
                </li>
                @foreach ($categories as $cat)
                    <li>
                        <a href="{{ route('beautyversity', ['category' => $cat->slug]) }}" class="{{ $activeCategory === $cat->slug ? 'active' : '' }}">{{ $cat->name }}</a>
                    </li>
                @endforeach
            </ul>

            @if($posts->count() > 0)
                <div class="bv-cards bvp-cards">
                    @foreach($posts as $i => $item)
                        <a href="/{{ $item->category?->slug ?? 'beautyversity' }}/{{ $item->slug }}" class="bv-card">
                            <div class="bv-card-media">
                                <img src="{{ $item->image ? getFile($item->image) : asset('assets/img/lunaray/content/beautyversity-card-skin.webp') }}" alt="{{ $item->title }}" loading="lazy">
                            </div>
                            <div class="bv-card-body">
                                <div class="bv-card-row">
                                    <span class="bv-card-category">{{ $item->category?->name ?? 'Beautyversity' }}</span>
                                    <span class="bv-card-index">{{ sprintf('%02d', ($posts->currentPage() - 1) * $posts->perPage() + $i + 1) }}<span class="bv-card-index-dash"></span></span>
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

                @if($posts->hasPages())
                    <ul class="bvp-pagination">
                        @if ($posts->onFirstPage())
                            <li><span class="disabled"><svg width="18" height="18" viewBox="0 -960 960 960" fill="currentColor"><path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z"/></svg></span></li>
                        @else
                            <li><a href="{{ $posts->previousPageUrl() }}"><svg width="18" height="18" viewBox="0 -960 960 960" fill="currentColor"><path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z"/></svg></a></li>
                        @endif

                        @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                            <li><a href="{{ $url }}" class="{{ $page == $posts->currentPage() ? 'active' : '' }}">{{ $page }}</a></li>
                        @endforeach

                        @if ($posts->hasMorePages())
                            <li><a href="{{ $posts->nextPageUrl() }}"><svg width="18" height="18" viewBox="0 -960 960 960" fill="currentColor"><path d="m553.846-253.847-42.153-43.384 152.77-152.77H180.001v-59.998h484.462l-152.77-152.77 42.153-43.384L779.999-480 553.846-253.847Z"/></svg></a></li>
                        @else
                            <li><span class="disabled"><svg width="18" height="18" viewBox="0 -960 960 960" fill="currentColor"><path d="m553.846-253.847-42.153-43.384 152.77-152.77H180.001v-59.998h484.462l-152.77-152.77 42.153-43.384L779.999-480 553.846-253.847Z"/></svg></span></li>
                        @endif
                    </ul>
                @endif
            @else
                <div class="bvp-empty">
                    <svg width="48" height="48" viewBox="0 -960 960 960" fill="currentColor"><path d="M440-280h80v-240h-80v240Zm40-320q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm0 520q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"/></svg>
                    <h4>Belum Ada Artikel</h4>
                    <p>Belum ada artikel Beautyversity {{ $activeCategory ? 'untuk kategori ini' : '' }} yang tersedia. Nantikan insight terbaru dari kami.</p>
                    <a href="{{ url('/') }}" class="glass-btn glass-btn-outline">
                        <span>Kembali ke Beranda</span>
                    </a>
                </div>
            @endif

            <div class="bv-footer-micro bvp-footer-micro">
                <span>Beauty Knowledge<br>For A Brighter Tomorrow.</span>
                <span>Science / People / Innovation / Real Impact</span>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-beranda.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-beranda.css')) }}">
<style>
    .bvp-hero {
        padding-top: clamp(96px, 8vw, 120px);
    }

    .bvp-header {
        margin-bottom: 32px;
    }

    .bvp-tabs {
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        padding: 0;
        margin: 0 0 44px 0;
    }

    .bvp-tabs a {
        display: inline-block;
        padding: 10px 22px;
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, .22);
        background: rgba(255, 255, 255, .06);
        color: rgba(255, 255, 255, .78);
        text-decoration: none;
        font-family: 'Nexa', sans-serif;
        font-weight: 700;
        font-size: 12.5px;
        letter-spacing: .8px;
        text-transform: uppercase;
        transition: all .25s ease;
    }

    .bvp-tabs a:hover {
        border-color: rgba(217, 141, 128, .55);
        color: #fff;
    }

    .bvp-tabs a.active {
        background: var(--lunaray-salmon);
        border-color: var(--lunaray-salmon);
        color: var(--lunaray-navy);
    }

    .bvp-cards {
        grid-template-columns: repeat(3, 1fr);
    }

    .bvp-cards .bv-card-media {
        aspect-ratio: 398 / 340;
    }

    .bvp-pagination {
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        padding: 0;
        margin: 16px 0 44px 0;
        justify-content: center;
    }

    .bvp-pagination li a,
    .bvp-pagination li span {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, .2);
        color: rgba(255, 255, 255, .7);
        text-decoration: none;
        font-family: 'Nexa', sans-serif;
        font-weight: 700;
        font-size: 13px;
        transition: all .25s ease;
    }

    .bvp-pagination li a:hover,
    .bvp-pagination li a.active {
        background: var(--lunaray-salmon);
        border-color: var(--lunaray-salmon);
        color: var(--lunaray-navy);
    }

    .bvp-pagination li span.disabled {
        opacity: .3;
        cursor: not-allowed;
    }

    .bvp-empty {
        text-align: center;
        padding: 70px 20px;
        margin-bottom: 40px;
        border: 1px solid rgba(255, 255, 255, .12);
        border-radius: 20px;
        background: rgba(255, 255, 255, .03);
    }

    .bvp-empty svg {
        color: rgba(255, 255, 255, .3);
        margin-bottom: 18px;
    }

    .bvp-empty h4 {
        font-family: 'Nexa', sans-serif;
        font-weight: 700;
        color: #fff;
        margin-bottom: 10px;
        font-size: 20px;
    }

    .bvp-empty p {
        font-family: 'Nexa', sans-serif;
        font-weight: 300;
        color: rgba(255, 255, 255, .6);
        max-width: 420px;
        margin: 0 auto 25px;
        line-height: 1.6;
    }

    .bvp-footer-micro {
        margin-top: 8px;
    }

    @media (max-width: 992px) {
        .bvp-cards {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 640px) {
        .bvp-cards {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush
