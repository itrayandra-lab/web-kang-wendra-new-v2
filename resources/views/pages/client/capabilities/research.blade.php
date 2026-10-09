@extends('layouts.client.app')

@section('content')

@php
    $img = fn (string $key) => asset('assets/img/lunaray/capabilities/research/rs-' . $key . '.webp');
    $icon = 'pages.client.capabilities.partials.icon';
    $at = fn ($x, $y, $w) => "--x:{$x};--y:{$y};--w:{$w}";

    $questions = [
        ['leaf', 'What can it become?', 'Bagaimana material tersebut dapat dikembangkan?'],
        ['network', 'What makes it relevant?', 'Karakter atau scientific potential apa yang dimilikinya?'],
        ['flask', 'How can it work in a formulation?', 'Bagaimana stability, compatibility, processing, dan delivery-nya?'],
        ['box', 'Where can it create value?', 'Bagaimana science tersebut dapat bergerak menuju aplikasi kosmetik nyata?'],
    ];
    // [title, sub, caption, center x]
    $stages = [
        ['Material', 'Natural Resources & Biological Materials', 'Exploring the potential of nature’s richness.', 648],
        ['Understanding', 'Analysis & Scientific Insight', 'Revealing active compounds and unique characteristics.', 873],
        ['Technology', 'Extraction, Processing & Delivery', 'Transforming potential into stable, functional actives.', 1094],
        ['Formulation', 'Science-Based Development', 'Creating formulations with precision and purpose.', 1315],
        ['Application', 'Real Products, Real Impact', 'Beauty innovations ready for the real world.', 1541],
    ];

    $locals = [
        ['leaf', 'Soy Isoflavone Aglycone', null, 'Pengembangan bahan aktif berbasis kedelai melalui riset apt. Cahya Khairani Kusumawulan.'],
        ['drop', 'Patin Oil / Pangasia Oil', 'In collaboration with IPB University', 'Eksplorasi minyak ikan patin sebagai local resource yang dapat dikembangkan menuju material bernilai tambah untuk beauty innovation.'],
        ['hexagons', 'Eggshell-Derived Cosmetic Active', 'In collaboration with Institut Teknologi Bandung — ITB', 'Research terhadap cangkang telur untuk mengeksplorasi potensinya sebagai sumber material aktif untuk aplikasi kosmetik.'],
    ];

    $bio = [
        ['hEGF For Hair', 'In collaboration with Universitas Padjadjaran', 'Research hEGF untuk mengeksplorasi kemungkinan aplikasinya dalam hair innovation.'],
        ['Exosome & Secretome Research', 'In collaboration with Universitas Padjadjaran', 'Research terhadap exosome dan secretome sebagai bagian dari exploration menuju emerging biological approaches dalam beauty science.'],
        ['Cosmetic Research For Diabetes-Related Skin Needs', null, 'Research untuk memahami dan mengeksplorasi pengembangan kosmetik yang mempertimbangkan kebutuhan kulit yang berkaitan dengan kondisi diabetes.'],
    ];

    $portfolio = [
        ['Soy Isoflavone Aglycone', 'Soybean-derived active development'],
        ['Patin Oil / Pangasia Oil', 'IPB University'],
        ['Eggshell-Derived Cosmetic Active', 'Institut Teknologi Bandung'],
        ['Phytocosmetic Active Research', 'LABCOS Universitas Padjadjaran · Kemiri · Rosemary · Daun Pinus'],
        ['PhytoSync', 'Blended phytocosmetic active system'],
        ['Ashitaba Extraction Research', 'STFI'],
        ['Sacha Inchi Nanoemulsion', 'Universitas Padjadjaran'],
        ['hEGF for Hair', 'Universitas Padjadjaran'],
        ['Exosome & Secretome Research', 'Universitas Padjadjaran'],
        ['Diabetes-Related Skin Needs', 'Special-needs cosmetic research'],
    ];
@endphp

<div class="pk-page ai-page ab-page rs-page">

    {{-- ===== 01 · Hero ===== --}}
    <section class="pk-frame pk-dark" id="research" aria-labelledby="rs-hero-title">
        <img class="pk-bg" src="{{ $img('01') }}" alt="Material lokal Indonesia — kedelai, ikan patin, cangkang telur, kemiri, dan tanaman — bergerak melalui extraction dan formulation menjadi produk kosmetik" width="1672" height="941" fetchpriority="high">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(66, 132, 520) }}">
                <p class="pk-eyebrow ab-eyebrow ab-eyebrow--plain">Science &amp; Research</p>
                <h1 class="pk-h ab-h" id="rs-hero-title" style="--fs:48">
                    <span>From Local</span>
                    <span>Resources To</span>
                    <span class="pk-acc">Science-Driven</span>
                    <span class="pk-acc">Beauty Innovation.</span>
                </h1>
                <p class="pk-p" style="--fs:15.5">Lunaray adalah pabrik kosmetik dan cosmetic development partner di Indonesia yang menghubungkan research, formulation science, technology, validation, dan manufacturing untuk membuka kemungkinan baru dalam pengembangan produk kosmetik.</p>
                <p class="pk-p" style="--fs:15.5">Bagi kami, potensi sebuah material tidak berhenti pada keberadaannya. Nilainya mulai terbentuk ketika material tersebut dipelajari, dikembangkan, diformulasikan, dan diterjemahkan menuju aplikasi yang relevan.</p>
                <i class="pk-rule pk-rule--tight"></i>
                <p class="ab-support rs-support-light">Research Should<span class="pk-block">Create New Possibilities.</span></p>
            </div>
            @foreach ([['Natural', 'Materials', 752], ['Extraction', '& Understanding', 924], ['Formulation', '& Technology', 1168], ['Beauty', 'Innovation', 1394]] as [$lA, $lB, $lX])
                <p class="pk-abs pk-d rs-tag" style="{{ $at($lX, 282, 190) }}">{{ $lA }}<span class="pk-block">{{ $lB }}</span></p>
            @endforeach
            <p class="pk-abs pk-d rs-foot" style="{{ $at(1000, 884, 620) }}">From Nature. Through Science. To A Brighter Tomorrow.</p>
        </div>
    </section>

    {{-- ===== 02 · How we approach research ===== --}}
    <section class="pk-frame" id="rs-approach" aria-labelledby="rs-approach-title">
        <img class="pk-bg" src="{{ $img('02') }}" alt="Alur research Lunaray: material, understanding, technology, formulation, application" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(66, 122, 460) }}">
                <p class="pk-eyebrow ab-eyebrow ab-eyebrow--rust">How We Approach Research</p>
                <h2 class="pk-h ab-h" id="rs-approach-title" style="--fs:40">
                    <span>We Study More</span>
                    <span>Than Ingredients.</span>
                    <span class="pk-acc">We Study What</span>
                    <span class="pk-acc">They Can Become.</span>
                </h2>
                <p class="pk-p" style="--fs:14">Research Lunaray dapat dimulai dari local resource, natural material, biological material, active compound, formulation challenge, maupun emerging technology.</p>
                <p class="rs-q-lead">Pertanyaannya bukan hanya:<strong>&ldquo;What is in this material?&rdquo;</strong><span>Tapi juga:</span></p>
                <ul class="rs-questions">
                    @foreach ($questions as [$qIcon, $qTitle, $qCopy])
                        <li>@include($icon, ['name' => $qIcon, 'class' => 'cap-icon', 'stroke' => 1.2])<div><strong>{{ $qTitle }}</strong><span>{{ $qCopy }}</span></div></li>
                    @endforeach
                </ul>
            </div>

            @foreach ($stages as [$sTitle, $sSub, $sCap, $sX])
                <p class="pk-abs pk-d rs-stage" style="{{ $at($sX - 100, 282, 200) }}"><strong>{{ $sTitle }}</strong>{{ $sSub }}</p>
                <p class="pk-abs pk-d rs-caption" style="{{ $at($sX - 100, 690, 200) }}">{{ $sCap }}</p>
            @endforeach
            <p class="pk-m pk-flow">
                @foreach ($stages as [$sTitle])@if (! $loop->first)<i>→</i>@endif<span>{{ $sTitle }}</span>@endforeach
            </p>
        </div>
    </section>

    {{-- ===== 03 · Local resources ===== --}}
    <section class="pk-frame pk-dark" id="rs-local" aria-labelledby="rs-local-title">
        <img class="pk-bg" src="{{ $img('03') }}" alt="Tiga material lokal: soy, patin oil, dan eggshell dalam display kaca — from nature, through science, to real impact" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(66, 132, 480) }}">
                <p class="pk-eyebrow ab-eyebrow ab-eyebrow--plain">Local Resources. New Value.</p>
                <h2 class="pk-h ab-h" id="rs-local-title" style="--fs:40">
                    <span>Science Can Turn</span>
                    <span>Familiar Materials</span>
                    <span class="pk-acc">Into New Beauty</span>
                    <span class="pk-acc">Possibilities.</span>
                </h2>
                <p class="pk-p" style="--fs:14">Indonesia memiliki banyak material yang selama ini dikenal sebagai pangan, hasil pertanian, hasil perikanan, atau biological by-product.</p>
                <p class="pk-p" style="--fs:14">Melalui research, material yang familiar dapat dipelajari kembali untuk menemukan kemungkinan nilai baru bagi cosmetic science.</p>
                <ul class="rs-list">
                    @foreach ($locals as [$lIcon, $lTitle, $lWith, $lCopy])
                        <li>@include($icon, ['name' => $lIcon, 'class' => 'cap-icon', 'stroke' => 1.2])<div><strong>{{ $lTitle }}</strong>@if ($lWith)<em>{{ $lWith }}</em>@endif<span>{{ $lCopy }}</span></div></li>
                    @endforeach
                </ul>
            </div>
            <p class="pk-abs pk-closing-big rs-line" style="--fs:26;{{ $at(700, 740, 800) }}">
                <span>From Local Materials</span>
                <span>To Higher-Value Scientific Applications.</span>
            </p>
        </div>
    </section>

    {{-- ===== 04 · Plant-based science ===== --}}
    <section class="pk-frame pk-dark" id="rs-plant" aria-labelledby="rs-plant-title">
        <img class="pk-bg" src="{{ $img('04') }}" alt="Extraction research kemiri, rosemary, daun pinus, dan ashitaba yang bermuara pada PhytoSync" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(930, 96, 690) }}">
                <p class="pk-eyebrow ab-eyebrow ab-eyebrow--rose">Plant-Based Science</p>
                <h2 class="pk-h ab-h" id="rs-plant-title" style="--fs:38">
                    <span>Nature Provides The Material.</span>
                    <span class="pk-acc">Science Defines The Possibility.</span>
                </h2>
                <p class="pk-lead" style="--fs:16">Natural tidak otomatis berarti innovative.</p>
                <p class="pk-p" style="--fs:14.5">Nilai scientific muncul ketika material dipelajari melalui extraction, characterization, formulation consideration, dan evidence yang relevan terhadap aplikasi yang ingin dikembangkan.</p>
                <div class="rs-group">
                    <h3>Phytocosmetic Active Research</h3>
                    <em>In collaboration with LABCOS Universitas Padjadjaran</em>
                    <p class="rs-mats">Kemiri · Rosemary · Daun Pinus</p>
                    <div class="rs-sub"><strong>PhytoSync</strong><span>Blended phytocosmetic active system yang dikembangkan sebagai hasil lanjutan dari research tersebut.</span></div>
                </div>
                <div class="rs-group">
                    <h3>Natural Material Extraction Research</h3>
                    <em>In collaboration with STFI</em>
                    <p class="rs-mats">Ashitaba</p>
                </div>
                <p class="ab-support ab-support--rose rs-support-sm">From Plant. To Extract. To Active Possibility.</p>
            </div>
        </div>
    </section>

    {{-- ===== 05 · Beyond the active ===== --}}
    <section class="pk-frame pk-dark" id="rs-active" aria-labelledby="rs-active-title">
        <img class="pk-bg" src="{{ $img('05') }}" alt="Sacha Inchi menjadi sistem nanoemulsi dan advanced formulation" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(66, 80, 580) }}">
                <p class="pk-eyebrow ab-eyebrow ab-eyebrow--rose">Beyond The Active</p>
                <h2 class="pk-h ab-h" id="rs-active-title" style="--fs:40">
                    <span>An Active Ingredient</span>
                    <span>Is Only The Beginning.</span>
                </h2>
                <p class="pk-p" style="--fs:15">Menemukan material atau active yang menarik belum otomatis menghasilkan produk yang baik.</p>
                <p class="pk-p" style="--fs:15">Solubility, stability, compatibility, processing, concentration, delivery system, hingga interaksi dengan keseluruhan formula ikut menentukan bagaimana sebuah active dapat diterjemahkan menjadi product system yang relevan.</p>
                <i class="pk-rule pk-rule--tight"></i>
                <div class="rs-group">
                    <p class="pk-eyebrow ab-eyebrow--plain rs-feat">Featured Research</p>
                    <h3 class="rs-big">Sacha Inchi Nanoemulsion</h3>
                    <em>In collaboration with Universitas Padjadjaran</em>
                    <p class="pk-p" style="--fs:14.5">Research terhadap pengembangan sistem nanoemulsi berbasis Sacha Inchi sebagai bagian dari eksplorasi <i>formulation and delivery technology.</i></p>
                </div>
                <p class="ab-support ab-support--rose">From Active Potential<span class="pk-block">To Formulation Possibility.</span></p>
            </div>
            <ul class="pk-m pk-list">
                <li><strong>Sacha Inchi</strong><span>Natural active source — omega fatty acids, phytosterols, tocopherols, antioxidants.</span></li>
                <li><strong>Nanoemulsion System</strong><span>Enhanced solubility, improved stability, controlled particle size, efficient delivery.</span></li>
                <li><strong>Advanced Formulation</strong><span>Stable nanoemulsion, optimized delivery, synergistic formula, skin-relevant performance.</span></li>
            </ul>
        </div>
    </section>

    {{-- ===== 06 · Advanced biological science ===== --}}
    <section class="pk-frame pk-dark" id="rs-bio" aria-labelledby="rs-bio-title">
        <img class="pk-bg" src="{{ $img('06') }}" alt="Research hEGF for hair, exosome & secretome, dan cosmetic research untuk kebutuhan kulit terkait diabetes" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(958, 110, 660) }}">
                <p class="pk-eyebrow ab-eyebrow ab-eyebrow--rose">Advanced Biological Science</p>
                <h2 class="pk-h ab-h" id="rs-bio-title" style="--fs:38">
                    <span>Beauty Science Is Moving</span>
                    <span class="pk-acc">Beyond The Ingredient.</span>
                </h2>
                <p class="pk-p" style="--fs:15">Perkembangan cosmetic science semakin bergerak dari pendekatan single hero ingredient menuju pemahaman yang lebih dalam terhadap biological systems, cellular-derived materials, hair and skin biology, serta kebutuhan pengguna yang lebih spesifik.</p>
                <p class="pk-p rs-hegf pk-d" style="--fs:13.5"><strong>hEGF for Hair</strong> &mdash; research hEGF untuk mengeksplorasi kemungkinan aplikasinya dalam hair innovation. <strong>Exosome &amp; Secretome</strong> &mdash; exploration menuju emerging biological approaches dalam beauty science.</p>
            </div>
            <p class="pk-abs ab-support ab-support--rose rs-bio-line" style="{{ $at(966, 690, 660) }}">From Active Ingredients<span class="pk-block">To Biological Systems</span><span class="pk-block">And Specific Skin Needs.</span></p>
            <ul class="pk-m pk-list">
                @foreach ($bio as [$bTitle, $bWith, $bCopy])
                    <li><strong>{{ $bTitle }}</strong>@if ($bWith)<b>{{ $bWith }}</b>@endif<span>{{ $bCopy }}</span></li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- ===== 07 · Selected research ===== --}}
    <section class="pk-frame" id="rs-portfolio" aria-labelledby="rs-portfolio-title">
        <img class="pk-bg" src="{{ $img('07') }}" alt="Lunaray Research Portfolio: soy isoflavone aglycone, patin oil, eggshell-derived active, phytocosmetic active, PhytoSync, ashitaba, sacha inchi nanoemulsion, hEGF for hair, exosome & secretome, diabetes-related skin needs" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(92, 156, 500) }}">
                <p class="pk-eyebrow ab-eyebrow ab-eyebrow--rust">Selected Research</p>
                <h2 class="pk-h ab-h" id="rs-portfolio-title" style="--fs:36">
                    <span>Not Just What We Know.</span>
                    <span>What We Choose To Explore.</span>
                </h2>
                <p class="pk-p" style="--fs:16">Research portfolio Lunaray mencerminkan bagaimana kami mengeksplorasi material, active system, delivery technology, biological science, dan kebutuhan kulit yang lebih spesifik sebagai bagian dari pengembangan cosmetic innovation.</p>
                <i class="pk-rule pk-rule--tight"></i>
                <p class="ab-support rs-support-ink">From Material Discovery<span class="pk-block">To Advanced Beauty Science.</span></p>
            </div>
            <ul class="pk-m pk-list">
                @foreach ($portfolio as [$pTitle, $pSub])
                    <li><strong>{{ $pTitle }}</strong><span>{{ $pSub }}</span></li>
                @endforeach
            </ul>
        </div>
    </section>

</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-packaging.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-packaging.css')) }}">
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-ai.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-ai.css')) }}">
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-about.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-about.css')) }}">
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-research.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-research.css')) }}">
@endpush
