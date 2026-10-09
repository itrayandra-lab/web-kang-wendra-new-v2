@extends('layouts.client.app')

@section('content')

@php
    $img = fn (string $key) => asset('assets/img/lunaray/about/about-' . $key . '.webp');
    $icon = 'pages.client.capabilities.partials.icon';
    $at = fn ($x, $y, $w) => "--x:{$x};--y:{$y};--w:{$w}";

    $services = [['gear', 'Pabrik Kosmetik'], ['box', 'Maklon Kosmetik'], ['bag', 'White Label'], ['network', 'OEM / ODM'], ['flask', 'Custom Formulation'], ['box', 'Packaging'], ['doc', 'Regulatory'], ['check', 'Validation'], ['gear', 'Manufacturing']];

    $worlds = [
        ['flask', 'Science', 'Evidence, cosmetic science, formulation knowledge, research, dan validation membangun dasar keputusan produk.'],
        ['activity', 'Intelligence', 'AI dan data membantu mempercepat exploration, interpretation, product concept, dan visualization.'],
        ['users', 'Expertise', 'Expertise yang tepat digunakan sesuai problem—mulai dari scientist, formulator, researcher, pharmacist, medical specialist, regulatory expert, hingga brand & market strategist.'],
        ['gear', 'Manufacturing', 'Insight, evidence, concept, dan formula diterjemahkan menjadi produk nyata yang dapat diproduksi secara konsisten.'],
    ];
    // [label, x, y] — sits beside each circle in the photo.
    $worldLabels = [['01', 'Science', 742, 128], ['02', 'Intelligence', 1470, 150], ['03', 'Expertise', 712, 512], ['04', 'Manufacturing', 1462, 546]];

    $roles = [
        ['flask', 'Scientists & Formulators', 'Translate evidence into formulation decisions.'],
        ['users', 'Experts & Researchers', 'Bring specialist depth when the problem requires it.'],
        ['activity', 'AI & Intelligence', 'Accelerate exploration, interpretation, and visualization.'],
        ['gear', 'Manufacturing & QA', 'Turn approved decisions into consistent real-world products.'],
    ];
    $roleLabels = [['Scientists &', 'Formulators', 676, 152], ['Experts &', 'Researchers', 1428, 152], ['AI &', 'Intelligence', 716, 590], ['Manufacturing', '& QA', 1508, 590]];

    $journey = [['Manufacturing', 'Roots', 300], ['Science', '& Research', 602], ['Expertise', '& Intelligence', 922], ['A Connected', 'Development Ecosystem', 1262]];

    $place = [['flask', 'Laboratory'], ['doc', 'Development'], ['shield', 'Quality Process'], ['gear', 'Manufacturing']];

    // [num, title, copy, x, y, w] — laid onto the four glass panels in the photo.
    $proof = [
        ['01', 'Certifications & Compliance', 'Standards, permits, certifications, dan regulatory evidence yang telah diverifikasi.', 674, 326, 188],
        ['02', 'Research & Institutional Proof', 'Research activity, collaborations, publications, atau institutional relationships yang dapat dibuktikan.', 914, 346, 186],
        ['03', 'Facility & Manufacturing Proof', 'Physical evidence dari laboratory, development environment, production, quality process, dan manufacturing.', 1158, 364, 190],
        ['04', 'Verified Facts', 'Data perusahaan, capability facts, experience, numbers, atau milestones yang hanya ditampilkan ketika statusnya sudah VERIFIED.', 1406, 376, 196],
    ];

    $institutions = ['BRIN', 'Universitas Padjadjaran', 'Institut Teknologi Bandung', 'Sekolah Tinggi Farmasi Indonesia', 'Universitas Bhakti Kencana', 'Universitas Jenderal Achmad Yani', 'Universitas Bakti Tunas Husada', 'dan institusi lainnya'];
@endphp

<div class="pk-page ai-page ab-page">

    {{-- ===== 01 · Hero ===== --}}
    <section class="pk-frame" id="about" aria-labelledby="ab-hero-title">
        <img class="pk-bg" src="{{ $img('01') }}" alt="Scientist Lunaray meneteskan formula di laboratorium dengan produk kosmetik Lunaray" width="1672" height="941" fetchpriority="high">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(66, 138, 640) }}">
                <p class="pk-eyebrow ab-eyebrow">About Lunaray</p>
                <h1 class="pk-h ab-h" id="ab-hero-title" style="--fs:64">
                    <span>Built Around</span>
                    <span>A Different Way</span>
                    <span>Of Developing</span>
                    <span class="pk-acc">Cosmetics.</span>
                </h1>
                <p class="ab-tagline">Better Products Begin With Better Understanding.</p>
                <p class="pk-p ab-w" style="--fs:18">Lunaray adalah perusahaan pengembangan dan manufaktur kosmetik di Indonesia yang membangun produk dari pemahaman terhadap problem, evidence, science, dan realitas pengembangan&mdash;kemudian menghubungkannya dengan formulation, expertise, technology, validation, dan manufacturing.</p>
                <div class="pk-btns ai-btns">
                    <a href="#ab-ecosystem" class="pk-btn ai-btn ai-btn--navy">
                        <span>Explore How We Develop</span>
                        @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])
                    </a>
                    <a href="#ab-trust" class="pk-btn ai-btn ai-btn--outline">
                        <span>Explore Trust &amp; Proof</span>
                        @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== 02 · What is Lunaray ===== --}}
    <section class="pk-frame" id="ab-what" aria-labelledby="ab-what-title">
        <img class="pk-bg" src="{{ $img('02') }}" alt="Lini produksi pabrik kosmetik Lunaray dengan tangki stainless dan produk skincare" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(88, 140, 560) }}">
                <p class="pk-eyebrow ab-eyebrow">Cosmetic Development &amp; Manufacturing</p>
                <h2 class="pk-h ab-h" id="ab-what-title" style="--fs:64">
                    <span>What Is</span>
                    <span class="pk-acc">Lunaray?</span>
                </h2>
                <p class="pk-p ab-w" style="--fs:17"><strong>Lunaray adalah pabrik kosmetik dan cosmetic development partner di Indonesia</strong> yang melayani kebutuhan maklon kosmetik, White Label/Private Label, OEM/ODM, custom formulation, packaging development, regulatory support, validation, dan manufacturing.</p>
                <p class="pk-p ab-w" style="--fs:17">Pengembangan produk dapat didukung oleh science, research, AI-assisted exploration, multidisciplinary expertise, dan manufacturing capability sesuai kebutuhan dan kedalaman project.</p>
                <div class="pk-btns ai-btns">
                    <a href="{{ route('beranda') }}#start-development" class="pk-btn ai-btn ai-btn--navy">
                        <span>Diskusikan Project Anda</span>
                        @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])
                    </a>
                    <a href="{{ route('capabilities') }}" class="pk-btn ai-btn ai-btn--outline">
                        <span>Lihat Kapabilitas Kami</span>
                    </a>
                </div>
            </div>

            <ul class="pk-abs ab-strip" style="{{ $at(40, 800, 1592) }}">
                @foreach ($services as [$sIcon, $sLabel])
                    <li>@include($icon, ['name' => $sIcon, 'class' => 'cap-icon', 'stroke' => 1.2])<span>{{ $sLabel }}</span></li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- ===== 03 · Development ecosystem ===== --}}
    <section class="pk-frame" id="ab-ecosystem" aria-labelledby="ab-eco-title">
        <img class="pk-bg" src="{{ $img('03') }}" alt="Empat dunia Lunaray yang terhubung: science, intelligence, expertise, dan manufacturing" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(62, 116, 660) }}">
                <p class="pk-eyebrow ab-eyebrow ab-eyebrow--rust">More Than Manufacturing</p>
                <h2 class="pk-h ab-h" id="ab-eco-title" style="--fs:60">
                    <span>A Development</span>
                    <span>Ecosystem,</span>
                    <span class="ab-h-sub">Not Just A Production Line.</span>
                </h2>
                <p class="pk-p ab-w2" style="--fs:15.5">Produk kosmetik tidak lahir hanya dari formula.</p>
                <p class="pk-p ab-w2" style="--fs:15.5">Ia berawal dari pemahaman terhadap manusia, kebutuhan pasar, evidence, science, formulation possibility, packaging, regulatory requirements, hingga kemampuan untuk memproduksinya secara konsisten.</p>
                <p class="pk-p ab-w2" style="--fs:15.5">Karena itu Lunaray dibangun sebagai sebuah development ecosystem yang menghubungkan berbagai disiplin tersebut dalam satu perjalanan pengembangan produk.</p>
            </div>

            @foreach ($worldLabels as [$wNum, $wLabel, $wX, $wY])
                <p class="pk-abs pk-d ab-bubble" style="{{ $at($wX, $wY, 200) }}"><em>{{ $wNum }} &mdash;</em>{{ $wLabel }}</p>
            @endforeach
            <p class="pk-abs pk-d ab-core" style="{{ $at(962, 330, 240) }}">Lunaray</p>

            <ol class="pk-abs ab-cards" style="{{ $at(56, 706, 1560) }}">
                @foreach ($worlds as $i => [$wIcon, $wTitle, $wCopy])
                    <li>
                        <div class="ab-card-head"><em>{{ sprintf('%02d', $i + 1) }}</em><strong>&mdash; {{ $wTitle }}</strong>@include($icon, ['name' => $wIcon, 'class' => 'cap-icon', 'stroke' => 1.3])</div>
                        <p>{{ $wCopy }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- ===== 04 · Human judgement at the center ===== --}}
    <section class="pk-frame" id="ab-people" aria-labelledby="ab-people-title">
        <img class="pk-bg" src="{{ $img('04') }}" alt="Tim scientist, formulator, dan researcher Lunaray berdiskusi dikelilingi AI, expertise, dan manufacturing" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(62, 116, 680) }}">
                <p class="pk-eyebrow ab-eyebrow ab-eyebrow--rust">Human Judgement At The Center</p>
                <h2 class="pk-h ab-h ab-h--tight" id="ab-people-title" style="--fs:50">
                    <span>Built By People.</span>
                    <span>Strengthened By Science.</span>
                    <span>Enabled By Technology.</span>
                </h2>
                <p class="pk-p ab-w2" style="--fs:15.5">Lunaray menggabungkan scientific thinking, formulation experience, research, technology, multidisciplinary expertise, dan manufacturing capability dalam satu development ecosystem.</p>
                <p class="pk-p ab-w2" style="--fs:15.5">Namun teknologi bukan pusat pengambilan keputusan. Human judgement tetap memegang peran utama dalam menilai evidence, menentukan arah formulasi, mempertimbangkan regulatory dan quality requirements, serta memastikan setiap keputusan dapat dipertanggungjawabkan.</p>
                <i class="pk-rule pk-rule--tight"></i>
                <p class="ab-support">AI Accelerates Exploration.<span class="pk-block">Human Expertise Guides The Decision.</span></p>
            </div>

            @foreach ($roleLabels as [$rA, $rB, $rX, $rY])
                <p class="pk-abs pk-d ab-bubble ab-bubble--sm" style="{{ $at($rX, $rY, 150) }}">{{ $rA }}<span class="pk-block">{{ $rB }}</span></p>
            @endforeach

            <ol class="pk-abs ab-cards ab-cards--role" style="{{ $at(56, 728, 1560) }}">
                @foreach ($roles as [$rIcon, $rTitle, $rCopy])
                    <li>
                        <span class="ab-role-icon">@include($icon, ['name' => $rIcon, 'class' => 'cap-icon', 'stroke' => 1.3])</span>
                        <div><strong>{{ $rTitle }}</strong><p>{{ $rCopy }}</p></div>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- ===== 05 · How we got here ===== --}}
    <section class="pk-frame pk-dark" id="ab-journey" aria-labelledby="ab-journey-title">
        <img class="pk-bg" src="{{ $img('05') }}" alt="Perjalanan Lunaray dari manufacturing roots, science & research, expertise & intelligence, hingga connected development ecosystem" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(66, 34, 700) }}">
                <p class="pk-eyebrow ab-eyebrow ab-eyebrow--rose">How We Got Here</p>
                <h2 class="pk-h ab-h ab-h--tight" id="ab-journey-title" style="--fs:42">
                    <span>From Making Products</span>
                    <span class="pk-acc">To Building A Better Way</span>
                    <span class="pk-acc">To Develop Them.</span>
                </h2>
                <p class="pk-p ab-w3" style="--fs:14">Lunaray tumbuh dari realitas pengembangan dan manufaktur kosmetik&mdash;dari formula, packaging, regulatory, production, hingga tantangan nyata ketika sebuah ide harus diwujudkan menjadi produk yang benar-benar dapat dibuat.</p>
                <p class="pk-p ab-w3" style="--fs:14">Seiring waktu, kami melihat bahwa kualitas sebuah produk tidak hanya ditentukan oleh apa yang terjadi di pabrik. Ia juga ditentukan oleh bagaimana problem dipahami, bagaimana evidence dibaca, bagaimana science diterjemahkan, bagaimana expertise digunakan, dan bagaimana keputusan dibuat sebelum produksi dimulai.</p>
                <p class="pk-p ab-w3" style="--fs:14">Dari situlah Lunaray berkembang menjadi lebih dari sekadar manufacturing operation. Kami membangun sebuah development ecosystem yang menghubungkan people, science, research, technology, formulation, validation, regulatory, packaging, dan manufacturing dalam satu cara kerja yang lebih terintegrasi.</p>
                <p class="ab-support ab-support--rose">The Journey Changed.<span class="pk-block">So Did The Way We Build.</span></p>
            </div>

            @foreach ($journey as [$jA, $jB, $jX])
                <p class="pk-abs ab-milestone" style="{{ $at($jX - 170, 822, 340) }}">{{ $jA }}<span class="pk-block">{{ $jB }}</span></p>
            @endforeach
        </div>
    </section>

    {{-- ===== 06 · Where development becomes real ===== --}}
    <section class="pk-frame pk-dark" id="ab-facility" aria-labelledby="ab-facility-title">
        <img class="pk-bg" src="{{ $img('06') }}" alt="Laboratory, development area, dan manufacturing floor Lunaray" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(70, 92, 580) }}">
                <p class="pk-eyebrow ab-eyebrow ab-eyebrow--plain">From Idea To Reality</p>
                <h2 class="pk-h ab-h" id="ab-facility-title" style="--fs:44">
                    <span>A Development</span>
                    <span>System Needs A Place</span>
                    <span>To Become Real.</span>
                </h2>
                <p class="pk-p" style="--fs:15.5">Lunaray tidak berhenti pada concept, research, atau formulation.</p>
                <p class="pk-p" style="--fs:14.5">Setiap keputusan pada akhirnya harus diterjemahkan ke dalam proses yang nyata&mdash;di laboratory, development area, quality process, dan manufacturing environment tempat sebuah produk diuji, disempurnakan, dan diproduksi secara konsisten.</p>
                <p class="pk-p" style="--fs:14.5">Karena itu, facility bukan sekadar tempat produksi. Ia adalah bagian dari sistem yang menghubungkan development, formulation, validation, quality, dan manufacturing dalam satu perjalanan yang dapat dijalankan secara nyata.</p>
            </div>

            <p class="pk-abs pk-closing-big ab-closing" style="--fs:30;{{ $at(70, 690, 640) }}">
                <span>Where Ideas Are Tested.</span>
                <span>Where Formulas Are Refined.</span>
                <span>Where Products Become Real.</span>
            </p>

            <ol class="pk-abs ab-flow" style="{{ $at(744, 700, 876) }}">
                @foreach ($place as [$pIcon, $pLabel])
                    <li>@include($icon, ['name' => $pIcon, 'class' => 'cap-icon', 'stroke' => 1.2])<span>{{ $pLabel }}</span></li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- ===== 07 · Trust through evidence ===== --}}
    <section class="pk-frame pk-dark" id="ab-trust" aria-labelledby="ab-trust-title">
        <img class="pk-bg" src="{{ $img('07') }}" alt="Empat evidence gateway Lunaray: certifications & compliance, research & institutional proof, facility & manufacturing proof, verified facts" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(66, 46, 520) }}">
                <p class="pk-eyebrow ab-eyebrow ab-eyebrow--rose">Trust Through Evidence</p>
                <h2 class="pk-h ab-h" id="ab-trust-title" style="--fs:48">
                    <span>Don&rsquo;t Just Take</span>
                    <span class="pk-acc">Our Word For It.</span>
                </h2>
                <p class="pk-p" style="--fs:15">Kepercayaan tidak dibangun dari kata-kata seperti professional, innovative, atau trusted.</p>
                <p class="pk-p" style="--fs:15">Ia dibangun dari hal-hal yang dapat dilihat, diperiksa, dan diverifikasi.</p>
                <p class="pk-p" style="--fs:15">Karena itu Lunaray menempatkan evidence sebagai bagian dari cara kami memperkenalkan siapa kami&mdash;mulai dari compliance, research, facility, expertise, hingga fakta-fakta organisasi yang memang dapat dipertanggungjawabkan.</p>
                <i class="pk-rule pk-rule--tight"></i>
                <p class="ab-support ab-support--rose">Proof Before Promises.<span class="pk-block">Facts Before Adjectives.</span></p>
            </div>

            @foreach ($proof as [$pNum, $pTitle, $pCopy, $pX, $pY, $pW])
                <div class="pk-abs ab-proof" style="{{ $at($pX, $pY, $pW) }}">
                    <em class="pk-m">{{ $pNum }}</em>
                    <h3>{{ $pTitle }}</h3>
                    <p>{{ $pCopy }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ===== 08 · Institutional collaboration ===== --}}
    <section class="pk-frame pk-dark" id="ab-collaboration" aria-labelledby="ab-collab-title">
        <img class="pk-bg" src="{{ $img('08') }}" alt="Jaringan kolaborasi Lunaray dengan BRIN, Universitas Padjadjaran, Institut Teknologi Bandung, Sekolah Tinggi Farmasi Indonesia, Universitas Bhakti Kencana, Universitas Jenderal Achmad Yani, Universitas Bakti Tunas Husada, dan institusi lainnya" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(66, 58, 520) }}">
                <p class="pk-eyebrow ab-eyebrow ab-eyebrow--rose">Connected Through Collaboration</p>
                <h2 class="pk-h ab-h" id="ab-collab-title" style="--fs:44">
                    <span>Better Development</span>
                    <span class="pk-acc">Doesn&rsquo;t Happen Alone.</span>
                </h2>
                <p class="pk-p" style="--fs:15">Pengembangan kosmetik yang semakin kompleks membutuhkan perspektif, pengetahuan, dan expertise dari berbagai disiplin.</p>
                <p class="pk-p" style="--fs:15">Karena itu Lunaray membangun hubungan dan kolaborasi dengan institusi riset dan pendidikan untuk membuka ruang pertukaran knowledge, research, scientific exploration, dan pengembangan yang relevan dengan industri.</p>
                <i class="pk-rule pk-rule--tight"></i>
                <p class="ab-support ab-support--rose">Connecting Science,<span class="pk-block">Academia, Research,</span><span class="pk-block">And Industry.</span></p>
            </div>

            <div class="pk-m pk-chips">
                @foreach ($institutions as $inst)<span>{{ $inst }}</span>@endforeach
            </div>
        </div>
    </section>

</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-packaging.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-packaging.css')) }}">
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-ai.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-ai.css')) }}">
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-about.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-about.css')) }}">
@endpush

