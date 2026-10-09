@extends('layouts.client.app')

@section('content')

@php
    $img = fn (string $key) => asset('assets/img/lunaray/capabilities/packaging/pkg-' . $key . '.webp');
    $icon = 'pages.client.capabilities.partials.icon';
    // Overlay position in photo pixels (every frame photo is 1672x941).
    $at = fn ($x, $y, $w) => "--x:{$x};--y:{$y};--w:{$w}";
    $discuss = route('beranda') . '#start-development';
@endphp

{{--
    Each frame is one 1672x941 photo that already carries part of its content
    (annotations, decision points, closing lines). The copy that isn't in the
    photo is laid over it in photo-pixel coordinates (.pk-abs + $at) and sized
    with container units, so it scales with the photo and stays aligned at any
    desktop width. Below 1100px the overlays drop into normal flow under the
    photo, and .pk-m blocks repeat the photo-baked content as readable HTML.
--}}
<div class="pk-page">

    {{-- ===== 01 · Hero ===== --}}
    <section class="pk-frame" id="packaging" aria-labelledby="pk-hero-title">
        <img class="pk-bg" src="{{ $img('01') }}" alt="Rangkaian konsep packaging Lunaray dengan anotasi product protection, formula compatibility, brand expression, dispensing & usability, dan manufacturing readiness" width="1672" height="941" fetchpriority="high">
        <div class="pk-layer">
            <div class="pk-abs pk-brand pk-d" style="{{ $at(58, 34, 300) }}">
                <strong>Lunaray</strong><span>Cosmetic by Science</span>
            </div>

            <div class="pk-abs" style="{{ $at(58, 126, 700) }}">
                <p class="pk-eyebrow pk-eyebrow--wide">{{ $hero['eyebrow'] }}</p>
                <h1 class="pk-h" id="pk-hero-title" style="--fs:70">
                    <span>{{ $hero['title'][0] }}</span>
                    <span class="pk-acc">{{ $hero['title'][1] }}</span>
                </h1>
                <p class="pk-lead" style="--fs:20">{{ $hero['lead'] }}</p>
                @foreach ($hero['body'] as $para)
                    <p class="pk-p" style="--fs:18.5">{{ $para }}</p>
                @endforeach
                <div class="pk-btns">
                    <a href="#pk-decision" class="pk-btn pk-btn--solid">
                        <span>{{ $hero['ctaPrimary'] }}</span>
                        @include($icon, ['name' => 'arrow-down', 'class' => 'cap-icon', 'stroke' => 1.6])
                    </a>
                    <a href="{{ $discuss }}" class="pk-btn pk-btn--ghost">
                        <span>{{ $hero['ctaSecondary'] }}</span>
                        @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])
                    </a>
                </div>
                <ul class="pk-feats">
                    @foreach ($hero['features'] as [$fIcon, $fTop, $fBottom])
                        <li>
                            @include($icon, ['name' => $fIcon, 'class' => 'cap-icon', 'stroke' => 1.3])
                            <span>{{ $fTop }}<br>{{ $fBottom }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <p class="pk-abs pk-tag pk-d" style="{{ $at(58, 850, 400) }}">
                <span>Different People.</span><span>Different Body Stories.</span><span>A More Meaningful Solution.</span>
            </p>

            <p class="pk-abs pk-micro-pill" style="{{ $at(948, 766, 682) }}">
                @foreach ($hero['micro'] as $i => $word)
                    @if ($i)<i aria-hidden="true">×</i>@endif<span>{{ $word }}</span>
                @endforeach
            </p>

            <p class="pk-abs pk-signature pk-d" style="{{ $at(1330, 884, 300) }}">Cosmetic by Science.</p>

            <ul class="pk-m pk-list">
                @foreach ($hero['mobile'] as [$mTitle, $mDesc])
                    <li><strong>{{ $mTitle }}</strong><span>{{ $mDesc }}</span></li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- ===== 02 · Packaging Decision System ===== --}}
    <section class="pk-frame" id="pk-decision" aria-labelledby="pk-decision-title">
        <img class="pk-bg" src="{{ $img('02') }}" alt="Packaging decision system: tujuh titik keputusan dari product, formula, delivery, consumer, brand, production, hingga sourcing di sekitar kemasan yang diurai" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(58, 58, 520) }}">
                <p class="pk-eyebrow">{{ $decision['eyebrow'] }}</p>
                <h2 class="pk-h" id="pk-decision-title" style="--fs:54">
                    @foreach ($decision['title'] as $i => $line)
                        <span class="{{ $i >= $decision['accentFrom'] ? 'pk-acc' : '' }}">{{ $line }}</span>
                    @endforeach
                </h2>
                <p class="pk-lead" style="--fs:17">{{ $decision['lead'] }}</p>
                @foreach ($decision['body'] as $para)
                    <p class="pk-p pk-narrow" style="--fs:16.5">{{ $para }}</p>
                @endforeach
                <i class="pk-rule"></i>
            </div>

            <div class="pk-abs pk-closing pk-closing--left" style="{{ $at(58, 720, 720) }}">
                <p class="pk-closing-lead">{{ $decision['closingLead'] }}</p>
                <p class="pk-closing-big" style="--fs:47">
                    <span><b class="pk-acc">Formula, Function,</b></span>
                    <span><b class="pk-acc">Experience</b> &amp; <b class="pk-acc">Brand</b> Meet.</span>
                </p>
            </div>

            <ol class="pk-m pk-list pk-list--num">
                @foreach ($decision['mobile'] as [$mNum, $mTitle, $mQ, $mDesc])
                    <li><em>{{ $mNum }}</em><strong>{{ $mTitle }}</strong><b>{{ $mQ }}</b><span>{{ $mDesc }}</span></li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- ===== 03 · Packaging Partner Network ===== --}}
    <section class="pk-frame" id="pk-network" aria-labelledby="pk-network-title">
        <img class="pk-bg" src="{{ $img('03') }}" alt="Jaringan packaging partner Lunaray: kebutuhan produk terhubung ke local network Indonesia dan global network internasional untuk menghasilkan opsi yang tepat" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(60, 32, 580) }}">
                <p class="pk-eyebrow">{{ $network['eyebrow'] }}</p>
                <h2 class="pk-h" id="pk-network-title" style="--fs:64">
                    <span>{{ $network['title'][0] }}</span>
                    <span class="pk-acc">{{ $network['title'][1] }}</span>
                </h2>
            </div>

            <div class="pk-abs" style="{{ $at(652, 58, 600) }}">
                <p class="pk-lead" style="--fs:16">{{ $network['lead'] }}</p>
                <p class="pk-p" style="--fs:15.5">{{ $network['body'] }}</p>
                <p class="pk-lead" style="--fs:16">
                    @foreach ($network['statement'] as $line)<span class="pk-block">{{ $line }}</span>@endforeach
                </p>
            </div>

            <p class="pk-abs pk-note" style="{{ $at(262, 428, 170) }}">
                <strong class="pk-m">Local Network · Indonesia</strong>
                {{ $network['local'] }}
            </p>
            <p class="pk-abs pk-note" style="{{ $at(1278, 428, 176) }}">
                <strong class="pk-m">Global Network · International</strong>
                {{ $network['global'] }}
            </p>

            <ul class="pk-m pk-list">
                @foreach ($network['mobile'] as [$mTitle, $mDesc])
                    <li><strong>{{ $mTitle }}</strong><span>{{ $mDesc }}</span></li>
                @endforeach
            </ul>
            <div class="pk-m pk-mclosing">
                <p><span>{{ $network['mobileClosing'][0] }}</span><span class="pk-acc">{{ $network['mobileClosing'][1] }}</span></p>
                <small>{{ $network['mobileClosing'][2] }}</small>
            </div>
        </div>
    </section>

    {{-- ===== 04 · Packaging Possibilities ===== --}}
    <section class="pk-frame" id="pk-possibilities" aria-labelledby="pk-possibilities-title">
        <img class="pk-bg" src="{{ $img('04') }}" alt="Tiga level pengembangan packaging — ready options, customization, distinctive development — dan packaging universe: airless, pump, dropper, spray, tube, jar, bottle, stick, special format, secondary packaging" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(68, 60, 450) }}">
                <p class="pk-eyebrow">{{ $possibilities['eyebrow'] }}</p>
                <h2 class="pk-h" id="pk-possibilities-title" style="--fs:60">
                    <span>{{ $possibilities['title'][0] }}</span>
                    <span class="pk-acc">{{ $possibilities['title'][1] }}</span>
                </h2>
                @foreach ($possibilities['body'] as $para)
                    <p class="pk-p" style="--fs:16">{{ $para }}</p>
                @endforeach
                <p class="pk-lead" style="--fs:16">{{ $possibilities['lead'] }}</p>
            </div>

            @foreach ($possibilities['levels'] as $i => [$lNum, $lLabel, $lTitle, $lDesc, $lChecks])
                <div class="pk-abs pk-level" style="{{ $at([540, 850, 1176][$i], 384, [278, 290, 300][$i]) }}">
                    <p class="pk-m pk-level-label"><em>{{ $lNum }}</em>{{ $lLabel }}</p>
                    <h3>{{ $lTitle }}</h3>
                    <p>{{ $lDesc }}</p>
                    <ul>
                        @foreach ($lChecks as $check)
                            <li>@include($icon, ['name' => 'check', 'class' => 'cap-icon', 'stroke' => 1.4]){{ $check }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

            <ul class="pk-universe pk-d" aria-hidden="true">
                @foreach ($possibilities['universe'] as [$uName, $uX, $uW])
                    <li style="{{ $at($uX, 600, $uW) }}"><span>{{ $uName }}</span></li>
                @endforeach
            </ul>

            <div class="pk-m pk-chips">
                @foreach ($possibilities['universe'] as [$uName])
                    <span>{{ $uName }}</span>
                @endforeach
            </div>
            <div class="pk-m pk-mclosing">
                <p><span>{{ $possibilities['mobileClosing'][0] }}</span><span class="pk-acc">{{ $possibilities['mobileClosing'][1] }}</span></p>
                <small>{{ $possibilities['mobileClosing'][2] }}</small>
            </div>
        </div>
    </section>

    {{-- ===== 05 · Formula × Packaging ===== --}}
    <section class="pk-frame" id="pk-formula" aria-labelledby="pk-formula-title">
        <img class="pk-bg" src="{{ $img('05') }}" alt="Formula dan packaging diuraikan: compatibility, protection, dispensing, exposure, usage, dan production" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(57, 46, 450) }}">
                <p class="pk-eyebrow">{{ $formula['eyebrow'] }}</p>
                <h2 class="pk-h" id="pk-formula-title" style="--fs:47">
                    @foreach ($formula['title'] as $i => $line)
                        <span class="{{ $i >= $formula['accentFrom'] ? 'pk-acc' : '' }}">{{ $line }}</span>
                    @endforeach
                </h2>
                @foreach ($formula['body'] as $para)
                    <p class="pk-p" style="--fs:15">{{ $para }}</p>
                @endforeach
                <p class="pk-lead" style="--fs:15">{{ $formula['lead'] }}</p>
            </div>

            <ol class="pk-m pk-list pk-list--num">
                @foreach ($formula['mobile'] as [$mNum, $mTitle, $mQ, $mDesc])
                    <li><em>{{ $mNum }}</em><strong>{{ $mTitle }}</strong><b>{{ $mQ }}</b><span>{{ $mDesc }}</span></li>
                @endforeach
            </ol>
            <div class="pk-m pk-mclosing">
                <p><span>{{ $formula['mobileClosing'][0] }}</span><span class="pk-acc">{{ $formula['mobileClosing'][1] }}</span></p>
                <small>{{ $formula['mobileClosing'][2] }}</small>
            </div>
        </div>
    </section>

    {{-- ===== 06 · Packaging × Experience ===== --}}
    <section class="pk-frame" id="pk-experience" aria-labelledby="pk-experience-title">
        <img class="pk-bg" src="{{ $img('06') }}" alt="Lima dimensi pengalaman packaging: handling, opening & closing, dispensing, portability, perceived value" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(55, 40, 620) }}">
                <p class="pk-eyebrow">{{ $experience['eyebrow'] }}</p>
                <h2 class="pk-h" id="pk-experience-title" style="--fs:56">
                    <span>{{ $experience['title'][0] }}</span>
                    <span class="pk-acc">{{ $experience['title'][1] }}</span>
                </h2>
                @foreach ($experience['body'] as $para)
                    <p class="pk-p pk-tight" style="--fs:15">{{ $para }}</p>
                @endforeach
                <p class="pk-lead" style="--fs:15.5">{{ $experience['lead'] }}</p>
            </div>

            {{-- Number, title and question are printed on each card; only the description isn't. --}}
            @foreach ($experience['cards'] as $i => [$cNum, $cTitle, $cQ, $cDesc])
                <p class="pk-abs pk-card-desc pk-d" style="{{ $at([132, 443, 753, 1068, 1382][$i], $i === 4 ? 651 : 643, $i === 4 ? 226 : 216) }}">{{ $cDesc }}</p>
            @endforeach

            <ol class="pk-m pk-list pk-list--num">
                @foreach ($experience['cards'] as [$mNum, $mTitle, $mQ, $mDesc])
                    <li><em>{{ $mNum }}</em><strong>{{ $mTitle }}</strong><b>{{ $mQ }}</b><span>{{ $mDesc }}</span></li>
                @endforeach
            </ol>
            <div class="pk-m pk-mclosing">
                <p><span>{{ $experience['mobileClosing'][0] }}</span><span class="pk-acc">{{ $experience['mobileClosing'][1] }}</span></p>
                <small>{{ $experience['mobileClosing'][2] }}</small>
            </div>
        </div>
    </section>

    {{-- ===== 07 · Packaging Development Journey ===== --}}
    <section class="pk-frame" id="pk-journey" aria-labelledby="pk-journey-title">
        <img class="pk-bg" src="{{ $img('07') }}" alt="Perjalanan pengembangan packaging dari product brief, packaging possibilities, packaging network, physical options, evaluation, right fit, hingga produksi" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(60, 42, 780) }}">
                <p class="pk-eyebrow">{{ $journey['eyebrow'] }}</p>
                <h2 class="pk-h" id="pk-journey-title" style="--fs:62">
                    <span>{{ $journey['title'][0] }}</span>
                    <span class="pk-acc">{{ $journey['title'][1] }}</span>
                </h2>
                <p class="pk-p pk-tight" style="--fs:16">{{ $journey['body'] }}</p>
                <p class="pk-lead" style="--fs:16.5">{{ $journey['lead'] }}</p>
            </div>

            @foreach ($journey['steps'] as $i => [$sNum, $sTitle, $sQ, $sDesc, $sLabel])
                <div class="pk-abs pk-step" style="{{ $at([52, 292, 532, 772, 1012, 1252, 1462][$i], 356, [226, 226, 226, 226, 226, 200, 204][$i]) }}">
                    <p class="pk-step-head"><em>{{ $sNum }}</em>{{ $sTitle }}</p>
                    <b>{{ $sQ }}</b>
                    <span>{{ $sDesc }}</span>
                </div>
                <span class="pk-abs pk-pill pk-d" style="{{ $at([46, 302, 561, 809, 1036, 1246, 1464][$i], 704, 200) }}">{{ $sLabel }}</span>
            @endforeach

            <div class="pk-abs pk-closing" style="{{ $at(306, 742, 1060) }}">
                <p class="pk-closing-big" style="--fs:44">
                    <span>{{ $journey['closing'][0] }}</span>
                    <span class="pk-acc">{{ $journey['closing'][1] }}</span>
                </p>
                <p class="pk-closing-micro">{{ $journey['closingMicro'] }}</p>
            </div>
        </div>
    </section>

    {{-- ===== 08 · Optional Design Support ===== --}}
    <section class="pk-frame" id="pk-design" aria-labelledby="pk-design-title">
        <img class="pk-bg" src="{{ $img('08') }}" alt="Dukungan desain packaging Lunaray: visual direction, packaging application, artwork development, production handoff — dari kemasan polos menjadi brand expression" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(60, 42, 620) }}">
                <p class="pk-eyebrow pk-eyebrow--line">{{ $design['eyebrow'] }}</p>
                <h2 class="pk-h" id="pk-design-title" style="--fs:54">
                    <span>{{ $design['title'][0] }}</span>
                    <span class="pk-acc">{{ $design['title'][1] }}</span>
                </h2>
                <p class="pk-p pk-tight pk-w530" style="--fs:15">{{ $design['body'] }}</p>
                <p class="pk-lead" style="--fs:15">
                    @foreach ($design['lead'] as $line)<span class="pk-block">{{ $line }}</span>@endforeach
                </p>
            </div>

            @foreach ($design['steps'] as $i => [$sNum, $sTitle, $sQ, $sDesc])
                <div class="pk-abs pk-dstep" style="{{ $at([60, 468, 870, 1272][$i], 372, 340) }}">
                    <em>{{ $sNum }}</em>
                    <div>
                        <p class="pk-dstep-title">{{ $sTitle }}</p>
                        <b>{{ $sQ }}</b>
                        <span>{{ $sDesc }}</span>
                    </div>
                </div>
            @endforeach

            <p class="pk-abs pk-fromto" style="{{ $at(60, 730, 175) }}">
                @php [$ftA, $ftB] = explode(' ', $design['from'][0], 2); @endphp<strong>{{ $ftA }} <span class="pk-block">{{ $ftB }}</span></strong><span>{{ $design['from'][1] }}</span>
            </p>
            <p class="pk-abs pk-fromto" style="{{ $at(632, 724, 250) }}">
                @php [$ftA, $ftB] = explode(' ', $design['to'][0], 2); @endphp<strong>{{ $ftA }} <span class="pk-block">{{ $ftB }}</span></strong><span>{{ $design['to'][1] }}</span>
            </p>

            <div class="pk-abs pk-own" style="{{ $at(1276, 712, 350) }}">
                @include($icon, ['name' => 'artwork', 'class' => 'cap-icon', 'stroke' => 1.3])
                <div>
                    <p class="pk-own-title">{{ $design['own']['title'] }}</p>
                    <p class="pk-own-accent">{{ $design['own']['accent'] }}</p>
                    <p class="pk-own-body">{{ $design['own']['body'] }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== 09 · Connected Development ===== --}}
    <section class="pk-frame pk-dark" id="pk-connected" aria-labelledby="pk-connected-title">
        <img class="pk-bg" src="{{ $img('09') }}" alt="Formula, packaging, brand, dan production saling terhubung membentuk satu produk: consumer problem, product development, real-world product" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs pk-brand pk-d" style="{{ $at(52, 40, 300) }}">
                <strong>Lunaray</strong><span>Cosmetic by Science</span>
            </div>

            <div class="pk-abs" style="{{ $at(52, 100, 540) }}">
                <p class="pk-eyebrow pk-eyebrow--line">{{ $connected['eyebrow'] }}</p>
                <h2 class="pk-h pk-h--connected" id="pk-connected-title">
                    <span class="pk-caps" style="--fs:41">{{ $connected['title'][0] }}</span>
                    <span class="pk-caps pk-acc" style="--fs:41">{{ $connected['title'][1] }}</span>
                    <span class="pk-soft" style="--fs:36">{{ $connected['title'][2] }}</span>
                </h2>
                @foreach ($connected['body'] as $para)
                    <p class="pk-p pk-narrow2 pk-tight" style="--fs:14">{{ $para }}</p>
                @endforeach
                <i class="pk-rule pk-rule--tight"></i>
                <p class="pk-statement">{{ $connected['statement'] }}</p>
            </div>

            <p class="pk-abs pk-closing-micro pk-closing-micro--dark pk-d" style="{{ $at(520, 821, 636) }}">{{ $connected['closingMicro'] }}</p>

            <ul class="pk-m pk-list">
                @foreach ($connected['mobile'] as [$mTitle, $mDesc])
                    <li><strong>{{ $mTitle }}</strong><span>{{ $mDesc }}</span></li>
                @endforeach
            </ul>
            <p class="pk-m pk-flow">
                @foreach ($connected['mobileFlow'] as $i => $step)
                    @if ($i)<i aria-hidden="true">→</i>@endif<span>{{ $step }}</span>
                @endforeach
            </p>
            <div class="pk-m pk-mclosing">
                <p><span>{{ $connected['mobileClosing'][0] }}</span><span class="pk-acc">{{ $connected['mobileClosing'][1] }}</span></p>
                <small>{{ $connected['closingMicro'] }}</small>
            </div>
        </div>
    </section>

    {{-- ===== 10 · Final CTA ===== --}}
    <section class="pk-frame pk-dark" id="pk-cta" aria-labelledby="pk-cta-title">
        <img class="pk-bg" src="{{ $img('10') }}" alt="Rangkaian packaging Lunaray dengan motif botanical rose-gold di atas podium" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs pk-brand pk-d" style="{{ $at(58, 40, 300) }}">
                <strong>Lunaray</strong><span>Cosmetic by Science</span>
            </div>

            <div class="pk-abs" style="{{ $at(60, 142, 600) }}">
                <p class="pk-eyebrow pk-eyebrow--line">{{ $cta['eyebrow'] }}</p>
                <h2 class="pk-h pk-caps" id="pk-cta-title" style="--fs:49">
                    <span>{{ $cta['title'][0] }}</span>
                    <span><b class="pk-acc">{{ $cta['title'][1] }}</b> {{ $cta['title'][2] }}</span>
                    <span>{{ $cta['title'][3] }}</span>
                </h2>
                <p class="pk-p" style="--fs:17">{{ $cta['body'] }}</p>
                <p class="pk-lead pk-lead--rose" style="--fs:17">
                    @foreach ($cta['lead'] as $line)<span class="pk-block">{{ $line }}</span>@endforeach
                </p>
                <div class="pk-btns pk-btns--stack">
                    <a href="{{ $discuss }}" class="pk-btn pk-btn--rose">
                        <span>{{ $cta['ctaPrimary'] }}</span>
                        @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])
                    </a>
                    <a href="#pk-possibilities" class="pk-btn pk-btn--outline-light">
                        <span>{{ $cta['ctaSecondary'] }}</span>
                        @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])
                    </a>
                </div>
                <ul class="pk-feats pk-feats--inline">
                    @foreach ($cta['features'] as [$fIcon, $fTop, $fBottom])
                        <li>
                            @include($icon, ['name' => $fIcon, 'class' => 'cap-icon', 'stroke' => 1.3])
                            <span>{{ $fTop }}<br>{{ $fBottom }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <p class="pk-abs pk-strip" style="{{ $at(60, 876, 520) }}">
                @foreach ($cta['strip'] as $word)<span>{{ $word }}</span>@endforeach
            </p>

            <p class="pk-abs pk-beyond pk-d" style="{{ $at(1448, 60, 170) }}" aria-hidden="true">
                <span>Beauty</span><span>Beyond</span><span>Borders</span>
            </p>
        </div>
    </section>

</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-packaging.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-packaging.css')) }}">
@endpush

@push('structured-data')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Packaging Development & Sourcing',
    'serviceType' => 'Cosmetic packaging development, sourcing, and packaging design support',
    'provider' => ['@type' => 'Organization', 'name' => 'Lunaray Beauty Factory', 'url' => url('/')],
    'areaServed' => 'ID',
    'url' => route('capabilities.packaging'),
    'description' => implode(' ', $hero['body']),
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Packaging development levels',
        'itemListElement' => collect($possibilities['levels'])->map(fn ($level) => [
            '@type' => 'Offer',
            'itemOffered' => ['@type' => 'Service', 'name' => $level[1], 'description' => $level[3]],
        ])->values(),
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush
