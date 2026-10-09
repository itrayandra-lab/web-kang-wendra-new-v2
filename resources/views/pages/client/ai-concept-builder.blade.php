@extends('layouts.client.app')

@section('content')

@php
    $img = fn (string $key) => asset('assets/img/lunaray/ai/ai-' . $key . '.webp');
    $icon = 'pages.client.capabilities.partials.icon';
    // Overlay position in photo pixels (every frame photo is 1672x941).
    $at = fn ($x, $y, $w) => "--x:{$x};--y:{$y};--w:{$w}";
    $hot = fn ($x, $y, $w, $h) => "--x:{$x};--y:{$y};--w:{$w};--h:{$h}";
    $discuss = route('beranda') . '#start-development';
    $ailuna = route('beranda') . '#ask-ailuna';

    $signals = [['user', 'Skin', 'Intelligence'], ['box', 'Product', 'Intelligence'], ['leaf', 'Wellness', 'Intelligence'], ['network', 'AI-Assisted', 'Development']];

    $quick = [['#ai-why', 'Why AI'], ['#ai-advantage', 'Our Advantage'], ['#ai-skin', 'Skin AI'], ['#ai-product', 'Product AI'], ['#ai-wellness', 'Wellness AI'], ['#ai-ailuna', 'AILUNA']];

    $sources = ['Consumer Signals', 'Market Data', 'Scientific Evidence', 'Skin Data', 'Product Ideas'];
    $benefits = [
        ['Reduce Avoidable Error', 'Membantu meningkatkan konsistensi dan struktur informasi dalam proses pengembangan.'],
        ['Faster Decisions', 'Membantu mempercepat perjalanan dari informasi dan insight menuju development direction.'],
        ['Explore More Possibilities', 'Mengeksplorasi lebih banyak alternatif sebelum waktu dan resource yang lebih besar digunakan.'],
        ['Better Understanding', 'Membantu mengubah informasi yang kompleks menjadi insight yang lebih mudah dipahami.'],
        ['Fewer Unnecessary Iterations', 'Membantu memperjelas arah lebih awal sebelum masuk ke tahapan pengembangan yang lebih kompleks.'],
        ['Better Collaboration', 'Membangun shared context yang lebih baik antara client, AI, dan Lunaray experts.'],
    ];

    // [num, title, sub, items, x, y, w]
    $strengths = [
        ['01', 'Experience', 'Built from real-world experience.', ['Owner & Key People', 'Industry Experience', 'Brand & Consumer Understanding', 'Strategic & Technical Judgement'], 512, 84, 170],
        ['02', 'Expertise', 'The right expertise for the right problem.', ['Cosmetic Experts', 'Formulators & Pharmacists', 'Doctors & Medical Specialists', 'Professors & Researchers', 'Relevant Multidisciplinary Experts'], 1428, 132, 206],
        ['03', 'Intelligence', 'Technology that expands how we explore.', ['Consumer Intelligence', 'Market Intelligence', 'Scientific Intelligence', 'Skin Intelligence', 'Product Intelligence', 'Visualization Intelligence'], 500, 424, 176],
        ['04', 'Execution', 'From intelligence to something real.', ['Product Development', 'Formulation', 'Validation', 'Regulatory', 'Packaging', 'Manufacturing'], 1446, 438, 188],
    ];

    // [key, title lines, copy, cta, href, text x, text y, orb x, orb y, orb w]
    $paths = [
        ['skin', ['My Skin /', 'Consumer'], 'Understand skin concerns and turn observations into more structured insight.', 'Try AI Skin Analyzer', '#ai-skin', 56, 226, 418, 250, 206],
        ['product', ['My Product', 'Idea'], 'Explore an early idea and turn it into a clearer product direction.', 'Create a Product Concept', '#ai-product', 1262, 226, 990, 246, 214],
        ['wellness', ['My Wellness', 'Opportunity'], 'Explore wellness needs, context, and potential development directions.', 'Explore AI Wellness', '#ai-wellness', 56, 510, 446, 466, 236],
        ['ailuna', ["I'm Not", 'Sure Yet'], 'Start with a conversation and let AILUNA help you find the right path.', 'Ask AILUNA', '#ai-ailuna', 1262, 510, 982, 470, 236],
    ];

    $skinFeats = [
        ['hexagons', 'Structured Skin Insight', 'Membantu melihat kondisi kulit secara lebih sistematis.'],
        ['zap', 'Faster Initial Understanding', 'Mempercepat tahap awal sebelum konsultasi atau product recommendation.'],
        ['target', 'More Relevant Direction', 'Membantu menghubungkan insight kulit dengan kategori kebutuhan yang lebih sesuai.'],
    ];
    // [label, x, w] — labels sit under each tile of the scan-to-direction strip in the photo.
    $skinFlow = [['Face Scan', 716, 132], ['Skin Mapping', 866, 126], ['AI Analysis', 1011, 127], ['Expert-Informed Interpretation', 1156, 157], ['Structured Insight', 1331, 125], ['Personalized Direction', 1474, 138]];

    $explore = [
        ['01', 'Market Opportunity', 'Explore consumer needs, market signals, category dynamics & competitive landscape.'],
        ['02', 'Product Strategy & USP', 'Define product proposition, key benefits, differentiation & reason to be chosen.'],
        ['03', 'Science-Based Evidence', 'Explore relevant scientific evidence to strengthen the product hypothesis.'],
        ['04', 'Active Ingredient Direction', 'Explore active ingredient options and their rationale for the intended product concept.'],
        ['05', 'Product Experience', 'Explore product format, texture, sensorial direction & intended user experience.'],
        ['06', 'Packaging Direction', 'Explore packaging type, form & visual direction aligned with the product positioning.'],
        ['07', 'Concept Visualization', 'Generate product and packaging mockups to make the idea visible before physical development.'],
        ['08', 'Market Differentiation', 'See how consumer problem, evidence, USP and product concept work together to create a clearer reason to be chosen.'],
    ];
    $conceptParts = ['Consumer Problem', 'Target Consumer', 'Market Opportunity', 'USP', 'Benefit Hierarchy', 'Scientific Evidence', 'Active Ingredient Direction', 'Texture & Format', 'Packaging Direction', 'Concept Mockup', 'Market Differentiation'];

    // [title, copy, x, y, w] — each tag sits on one of the floating lifestyle panels.
    $areas = [
        ['Activity & Exercise', 'Explore aktivitas dan exercise yang dapat dipertimbangkan sesuai konteks lifestyle Anda.', 600, 72, 206],
        ['Consumption & Nutrition', 'Understand pola konsumsi dan explore pilihan makanan, minuman, atau nutrition direction yang relevan untuk wellness goals Anda.', 1200, 96, 214],
        ['Your Lifestyle', 'Understand your daily routines, activity, rest, and lifestyle patterns.', 550, 382, 168],
        ['Daily Habits', 'Discover practical adjustments that can help build better everyday wellness habits.', 1328, 284, 190],
    ];
    // [title, x, w] — one per empty step card in the photo.
    $wellFlow = [['Tell Us About Your Lifestyle', 70, 200], ['AI-Assisted Understanding', 328, 180], ['Your Wellness Insight', 563, 175], ['Practical Daily Guidance', 796, 190]];

    // [num, title, copy, x, y, w]
    $layers = [
        ['01', 'Consumer Intelligence', 'Understand needs, behavior, context, and emerging consumer signals.', 548, 66, 160],
        ['02', 'Market Intelligence', 'Explore category movements, market opportunities, competitive signals, and changing demand.', 1392, 70, 220],
        ['03', 'Scientific Intelligence', 'Explore scientific literature, evidence, mechanisms, and relevant research more efficiently.', 1494, 318, 164],
        ['04', 'Skin Intelligence', 'Transform visual and contextual skin information into more structured insight.', 1416, 596, 214],
        ['05', 'Product Intelligence', 'Connect consumer problem, evidence, ingredients, product direction, and development possibilities.', 532, 600, 150],
        ['06', 'Visualization Intelligence', 'Turn early ideas and product directions into concepts that can be seen and discussed earlier.', 452, 318, 150],
    ];

    // [icon, num, title, verbs, x]
    $stages = [
        ['network', '01', 'AI Explores', ['Explore', 'Organize', 'Compare', 'Connect', 'Visualize'], 60],
        ['users', '02', 'Human Expertise Decides', ['Interpret', 'Challenge', 'Judge', 'Refine', 'Decide'], 580],
        ['gear', '03', 'Lunaray Executes', ['Formulate', 'Validate', 'Regulatory', 'QA/QC', 'Manufacture'], 1170],
    ];

    // [title, sub, href, hotspot x, y, w, h]
    $gateways = [
        ['Understand Your Skin', 'AI Skin Analyzer', '#ai-skin', 456, 76, 226, 232],
        ['Explore Product Ideas', 'AI Product Concept Builder', '#ai-product', 408, 298, 260, 216],
        ['Discover Wellness Insights', 'AI Wellness Intelligence', '#ai-wellness', 336, 498, 252, 200],
        ['Develop Your Brand', 'OEM · ODM · OBM · IPM', route('develop-with-us'), 1232, 124, 354, 214],
        ['Learn & Grow', 'Beautyversity', route('beautyversity'), 1238, 328, 354, 196],
        ['Ask AILUNA', 'Consult with AILUNA', $ailuna, 1238, 520, 360, 172],
    ];
    // [label, x, w] — the prompt chips baked into the photo; "Regulatory Questions" is re-set over the old label.
    $prompts = [['Skin Analysis', 330, 125], ['Product Concept', 465, 158], ['Brand Development', 633, 178], ['Formulation Insight', 822, 170], ['Regulatory Questions', 1002, 178], ['General Inquiry', 1190, 151]];
@endphp

{{--
    Same frame system as the Packaging page: each frame is one 1672x941 photo with
    the copy laid over it in photo-pixel coordinates (.pk-abs + $at), scaled with
    container units. Below 1100px the overlays fall into normal flow under the
    photo, and .pk-m blocks repeat whatever only the photo shows.
--}}
<div class="pk-page ai-page">

    {{-- ===== 01 · Hero ===== --}}
    <section class="pk-frame pk-dark" id="ai-intelligence" aria-labelledby="ai-hero-title">
        <img class="pk-bg" src="{{ $img('01') }}" alt="Perempuan Indonesia dikelilingi panel holografik skin mapping, formulasi, dan data produk — Lunaray AI & Beauty Intelligence" width="1672" height="941" fetchpriority="high">
        <div class="pk-layer">
            <div class="pk-abs ai-hero-copy" style="{{ $at(88, 112, 462) }}">
                <p class="pk-eyebrow ai-eyebrow">Lunaray AI &amp; Beauty Intelligence</p>
                <h1 class="pk-h ai-h" id="ai-hero-title" style="--fs:58">
                    <span>Human</span>
                    <span>Intelligence,</span>
                    <span class="pk-acc">Amplified.</span>
                </h1>
                <p class="pk-lead ai-lead" style="--fs:17.5">Where human expertise, scientific thinking, and artificial intelligence work together to build better beauty products.</p>
                <p class="pk-p" style="--fs:14">Lunaray mengintegrasikan AI ke dalam proses pengembangan produk untuk membantu memahami problem lebih dalam, mengeksplorasi lebih banyak kemungkinan, dan mempercepat perjalanan dari insight menuju keputusan.</p>
                <p class="pk-p ai-strong" style="--fs:14">AI memperluas kemampuan manusia untuk mengeksplorasi dan memahami. Human expertise tetap menilai, memutuskan, dan bertanggung jawab.</p>
                <i class="pk-rule pk-rule--tight"></i>
                <p class="ai-signature">AI Explores. Human Expertise Decides.</p>
                <div class="pk-btns ai-btns">
                    <a href="#ai-why" class="pk-btn ai-btn ai-btn--rose">
                        <span>Explore Lunaray Intelligence</span>
                        @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])
                    </a>
                    <a href="#ai-experience" class="pk-btn ai-btn ai-btn--line">
                        <span>Try Our AI Experiences</span>
                        @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])
                    </a>
                </div>
            </div>

            <ul class="pk-abs ai-signals" style="{{ $at(88, 810, 760) }}" aria-label="Lunaray intelligence areas">
                @foreach ($signals as [$sIcon, $sTop, $sBottom])
                    <li>
                        @include($icon, ['name' => $sIcon, 'class' => 'cap-icon', 'stroke' => 1.3])
                        <span>{{ $sTop }}<br>{{ $sBottom }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- Quick links — sits right after the hero, not part of its copy. --}}
    <nav class="ai-quick" aria-label="Lunaray Intelligence sections">
        <ul>
            @foreach ($quick as $i => [$qHref, $qLabel])
                <li><a href="{{ $qHref }}" class="{{ $loop->last ? 'is-accent' : '' }}">{{ $qLabel }}@if ($loop->last) @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])@endif</a></li>
            @endforeach
        </ul>
    </nav>

    {{-- ===== 02 · Human-Centric AI ===== --}}
    <section class="pk-frame" id="ai-why" aria-labelledby="ai-why-title">
        <img class="pk-bg" src="{{ $img('02') }}" alt="Informasi consumer, market, scientific, skin, dan product masuk ke AI intelligence layer lalu diinterpretasi oleh expert Lunaray" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(40, 66, 482) }}">
                <p class="pk-eyebrow ai-eyebrow">Why Lunaray Embraces AI</p>
                <h2 class="pk-h" id="ai-why-title" style="--fs:40">
                    <span>Technology Should</span>
                    <span class="pk-acc">Amplify Human</span>
                    <span class="pk-acc">Intelligence.</span>
                    <span>Not Replace It.</span>
                </h2>
                <p class="pk-p" style="--fs:14">Teknologi mengubah cara kita memahami consumer, membaca informasi, mengeksplorasi ide, dan mengembangkan produk.</p>
                <p class="pk-p" style="--fs:14">Lunaray mengintegrasikan AI untuk membantu manusia bekerja dengan informasi yang lebih terstruktur, mengeksplorasi lebih banyak kemungkinan, dan mempercepat proses menuju keputusan yang lebih baik.</p>
                <p class="pk-lead" style="--fs:14.5">AI membantu mempercepat exploration.<span class="pk-block">Human expertise tetap memberikan judgement.</span></p>
            </div>

            @foreach ($sources as $i => $source)
                <p class="pk-abs pk-d ai-source" style="{{ $at(668, 110 + $i * 77.5, 118) }}">{{ $source }}</p>
            @endforeach

            @foreach ([['AI Assists', 572], ['Humans Interpret', 792], ['Experts Decide', 1028]] as [$pLabel, $pX])
                <p class="pk-abs pk-d ai-pill-label" style="{{ $hot($pX, 505, 122, 53) }}">{{ $pLabel }}</p>
            @endforeach

            <p class="pk-m pk-flow"><span>Information</span><i>→</i><span>AI Intelligence</span><i>→</i><span>Human Judgement</span><i>→</i><span>Better Development</span></p>

            <p class="pk-abs pk-eyebrow ai-eyebrow ai-eyebrow--sm" style="{{ $at(48, 552, 700) }}">What This Means For Our Clients</p>

            @foreach ($benefits as $i => [$bTitle, $bCopy])
                <div class="pk-abs ai-benefit" style="{{ $at(70 + $i * 262.8, 650, 214) }}">
                    <em class="pk-m">{{ sprintf('%02d', $i + 1) }}</em>
                    <h3>{{ $bTitle }}</h3>
                    <p>{{ $bCopy }}</p>
                </div>
            @endforeach

            <p class="pk-abs pk-closing-big ai-payoff" style="{{ $at(306, 786, 1240) }}">
                <span>The Benefit Isn&rsquo;t More AI.</span>
                <span>It&rsquo;s <b class="pk-acc">Better Development</b> For Our Clients.</span>
            </p>
        </div>
    </section>

    {{-- ===== 03 · The Lunaray Advantage ===== --}}
    <section class="pk-frame pk-dark" id="ai-advantage" aria-labelledby="ai-advantage-title">
        <img class="pk-bg" src="{{ $img('03') }}" alt="Empat dunia yang saling terhubung: experience, expertise, intelligence, dan execution di sekitar satu development ecosystem" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(60, 110, 424) }}">
                <p class="pk-eyebrow ai-eyebrow">The Lunaray Advantage</p>
                <h2 class="pk-h" id="ai-advantage-title" style="--fs:32">
                    <span>Our Advantage Isn&rsquo;t</span>
                    <span class="pk-acc">One Technology.</span>
                </h2>
                <p class="ai-caps-lead">It&rsquo;s how experience, expertise, intelligence and execution work together.</p>
                <p class="pk-p" style="--fs:14">Lunaray menggabungkan pengalaman owner dan key people, kolaborasi dengan multidisciplinary experts, AI-assisted intelligence, serta kapabilitas pengembangan dan manufaktur dalam satu ekosistem.</p>
                <p class="pk-p" style="--fs:14">Bukan satu tools. Bukan satu expertise. Tetapi berbagai bentuk intelligence dan pengalaman yang bekerja bersama untuk membantu menghasilkan development decisions yang lebih matang.</p>
            </div>

            @foreach ($strengths as [$sNum, $sTitle, $sSub, $sItems, $sX, $sY, $sW])
                <div class="pk-abs ai-strength" style="{{ $at($sX, $sY, $sW) }}">
                    <em>{{ $sNum }}</em>
                    <h3>{{ $sTitle }}</h3>
                    <p>{{ $sSub }}</p>
                    <ul>
                        @foreach ($sItems as $item)<li>{{ $item }}</li>@endforeach
                    </ul>
                </div>
            @endforeach

            <p class="pk-abs pk-d ai-core" style="{{ $at(918, 368, 254) }}">
                <strong>Lunaray</strong>
                <span>One Integrated Development Ecosystem.</span>
            </p>

            <div class="pk-abs ai-formula" style="{{ $at(236, 782, 1200) }}">
                <p class="pk-closing-big" style="--fs:30">
                    <span>Experience <i>×</i> Expertise <i>×</i> Intelligence <i>×</i> Execution</span>
                </p>
                <p class="ai-formula-sub">Different strengths. One development system.</p>
            </div>
        </div>
    </section>

    {{-- ===== 04 · Experience Lunaray Intelligence ===== --}}
    <section class="pk-frame pk-dark" id="ai-experience" aria-labelledby="ai-experience-title">
        <img class="pk-bg" src="{{ $img('04') }}" alt="Intelligence core bercahaya dengan empat pathway: skin, product, wellness, dan AILUNA" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer ai-paths">
            <div class="pk-abs ai-center" style="{{ $at(436, 44, 800) }}">
                <p class="pk-eyebrow ai-eyebrow ai-eyebrow--center">Experience Lunaray Intelligence</p>
                <h2 class="pk-h" id="ai-experience-title" style="--fs:42">
                    <span>What Are You Trying</span>
                    <span class="pk-acc">To Understand?</span>
                </h2>
                <p class="pk-p ai-center-p" style="--fs:13.5">Setiap pengembangan dimulai dari pertanyaan yang berbeda. Pilih apa yang ingin Anda pahami, lalu jelajahi bagaimana Lunaray Intelligence dapat membantu.</p>
            </div>

            @foreach ($paths as [$pKey, $pTitle, $pCopy, $pCta, $pHref, $pX, $pY, $oX, $oY, $oW])
                <a href="{{ $pHref }}" class="pk-abs pk-d ai-orb" data-path="{{ $pKey }}" style="{{ $at($oX, $oY, $oW) }}" aria-hidden="true" tabindex="-1"></a>
                <div class="pk-abs ai-path" data-path="{{ $pKey }}" style="{{ $at($pX, $pY, 350) }}">
                    <h3>{{ $pTitle[0] }} <span class="pk-block">{{ $pTitle[1] }}</span></h3>
                    <p>{{ $pCopy }}</p>
                    <a href="{{ $pHref }}" class="ai-path-cta">
                        <span>{{ $pCta }}</span>
                        @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])
                    </a>
                </div>
            @endforeach

            <p class="pk-abs ai-problem" style="{{ $at(436, 786, 800) }}">
                <span>Start With The Problem.</span>
                <span>Not The Tool.</span>
            </p>
        </div>
    </section>

    {{-- ===== 05 · AI Skin Intelligence ===== --}}
    <section class="pk-frame" id="ai-skin" aria-labelledby="ai-skin-title">
        <img class="pk-bg" src="{{ $img('05') }}" alt="AI Skin Analyzer: facial mapping pada wajah, sampel kondisi kulit, dan pakar kosmetik serta dermatolog meninjau hasil analisis" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(82, 104, 580) }}">
                <p class="pk-eyebrow ai-eyebrow">AI Skin Intelligence</p>
                <h2 class="pk-h" id="ai-skin-title" style="--fs:42">
                    <span>Understand The Skin</span>
                    <span class="pk-acc">Before Recommending</span>
                    <span class="pk-acc">The Product.</span>
                </h2>
                <p class="pk-p" style="--fs:14.5">AI Skin Analyzer membantu mengubah visual wajah menjadi structured skin insight yang lebih mudah dipahami.</p>
                <p class="pk-p" style="--fs:14.5">Melalui proses image analysis, facial mapping, verifikasi dengan pakar kosmetik dan dermatolog, serta structured interpretation, pengguna dapat melihat indikasi concern kulit yang relevan sebelum masuk ke arahan perawatan atau product category berikutnya.</p>
                <ul class="ai-feats3">
                    @foreach ($skinFeats as [$fIcon, $fTitle, $fCopy])
                        <li>
                            @include($icon, ['name' => $fIcon, 'class' => 'cap-icon', 'stroke' => 1.2])
                            <strong>{{ $fTitle }}</strong>
                            <span>{{ $fCopy }}</span>
                        </li>
                    @endforeach
                </ul>
                <div class="pk-btns ai-btns">
                    <a href="{{ $ailuna }}" class="pk-btn ai-btn ai-btn--navy">
                        <span>Try AI Skin Analyzer</span>
                        @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])
                    </a>
                    <a href="#ai-human" class="pk-btn ai-btn ai-btn--outline">
                        <span>See How It Works</span>
                        @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])
                    </a>
                </div>
                <p class="ai-disclaimer">AI-assisted skin analysis is not a medical diagnosis.</p>
            </div>

            @foreach ($skinFlow as [$fLabel, $fX, $fW])
                <p class="pk-abs pk-d ai-tile-label" style="{{ $at($fX, 768, $fW) }}">{{ $fLabel }}</p>
            @endforeach
            <p class="pk-m pk-flow">
                @foreach ($skinFlow as [$fLabel])
                    @if (! $loop->first)<i>→</i>@endif<span>{{ $fLabel }}</span>
                @endforeach
            </p>
        </div>
    </section>

    {{-- ===== 06 · AI Product Concept ===== --}}
    <section class="pk-frame pk-dark" id="ai-product" aria-labelledby="ai-product-title">
        <img class="pk-bg" src="{{ $img('06') }}" alt="Konsep produk Lunaray: market opportunity, target consumer, product strategy, scientific evidence, active ingredient, product experience, dan packaging direction di sekitar mockup produk" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(88, 84, 560) }}">
                <p class="pk-eyebrow ai-eyebrow">AI Product Concept</p>
                <h2 class="pk-h" id="ai-product-title" style="--fs:48">
                    <span>Turn Your Idea Into</span>
                    <span class="pk-acc">A Product Built</span>
                    <span class="pk-acc">To Compete.</span>
                </h2>
                <p class="ai-caps-lead">From market opportunity to science-based product concept.</p>
                <p class="pk-p" style="--fs:13.5">AI Product Concept adalah tool Lunaray yang membantu klien mengembangkan ide menjadi konsep produk yang lebih terstruktur&mdash;dengan menghubungkan consumer needs, market research, scientific evidence, active ingredient direction, USP, product experience, packaging, hingga concept visualization.</p>
                <p class="pk-p" style="--fs:13.5">Sebelum masuk ke tahap formulasi fisik, klien dapat mengeksplorasi apa yang akan dibuat, untuk siapa, mengapa produk tersebut relevan, dan bagaimana produk tersebut dapat dibedakan di pasar.</p>
            </div>

            <ol class="pk-abs ai-explore" style="{{ $at(40, 572, 760) }}">
                @foreach ($explore as [$eNum, $eTitle, $eCopy])
                    <li><em>{{ $eNum }}</em><strong>{{ $eTitle }}</strong><span>{{ $eCopy }}</span></li>
                @endforeach
            </ol>

            <div class="pk-abs ai-concept-panel" style="{{ $at(812, 722, 822) }}">
                <div class="ai-concept">
                    <strong>Your Product Concept</strong>
                    <p>{{ implode(' · ', $conceptParts) }}</p>
                    <span class="ai-concept-tag">Concept &mdash; Not Final Product</span>
                </div>
                <div class="ai-result">
                    <p class="ai-result-h">From an idea in your head <span class="pk-block">to a product concept you can see,</span> <span class="pk-block">understand, and develop.</span></p>
                    <div class="pk-btns ai-btns ai-btns--sm">
                        <a href="{{ $ailuna }}" class="pk-btn ai-btn ai-btn--rose">
                            <span>Create Your Product Concept</span>
                            @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])
                        </a>
                        <a href="#ai-ecosystem" class="pk-btn ai-btn ai-btn--line">
                            <span>See How It Works</span>
                            @include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])
                        </a>
                    </div>
                    <p class="ai-micro">Explore first. Formulate with clearer direction.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== 07 · AI Wellness Intelligence ===== --}}
    <section class="pk-frame" id="ai-wellness" aria-labelledby="ai-wellness-title">
        <img class="pk-bg" src="{{ $img('07') }}" alt="Perempuan dengan panel lifestyle holografik: aktivitas, nutrisi, istirahat, dan rutinitas harian" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(40, 62, 488) }}">
                <p class="pk-eyebrow ai-eyebrow">AI Wellness Intelligence</p>
                <h2 class="pk-h" id="ai-wellness-title" style="--fs:44">
                    <span>Understand</span>
                    <span>Your Lifestyle.</span>
                    <span class="pk-acc">Build Better</span>
                    <span class="pk-acc">Daily Habits.</span>
                </h2>
                <p class="ai-caps-lead">Your daily life holds clues to your wellness.</p>
                <p class="pk-p" style="--fs:14">AI Wellness membantu Anda melihat gaya hidup dan kebiasaan sehari-hari secara lebih terstruktur.</p>
                <p class="pk-p" style="--fs:14">Dengan memahami aktivitas, pola konsumsi, istirahat, dan rutinitas harian, AI membantu mengubah informasi tersebut menjadi <strong>wellness insight</strong> dan arahan praktis yang lebih relevan untuk mendukung kebiasaan sehari-hari yang lebih baik.</p>
            </div>

            @foreach ($areas as [$aTitle, $aCopy, $aX, $aY, $aW])
                <div class="pk-abs ai-area" style="{{ $at($aX, $aY, $aW) }}">
                    <strong>{{ $aTitle }}</strong>
                    <span>{{ $aCopy }}</span>
                </div>
            @endforeach

            @foreach ($wellFlow as [$wTitle, $wX, $wW])
                <p class="pk-abs pk-d ai-step-label" style="{{ $at($wX, 712, $wW) }}">{{ $wTitle }}</p>
            @endforeach
            <p class="pk-m pk-flow">
                @foreach ($wellFlow as [$wTitle])
                    @if (! $loop->first)<i>→</i>@endif<span>{{ $wTitle }}</span>
                @endforeach
            </p>

            <p class="pk-abs pk-d ai-guidance" style="{{ $at(1066, 574, 400) }}">Your Wellness Guidance</p>
            @foreach ([['Move', 1062], ['Nourish', 1258], ['Rest & Routine', 1455]] as [$gLabel, $gX])
                <p class="pk-abs pk-d ai-guidance-card" style="{{ $at($gX, 770, 170) }}">{{ $gLabel }}</p>
            @endforeach

            <div class="pk-abs ai-wpayoff" style="{{ $at(40, 792, 600) }}">
                <p class="pk-closing-big" style="--fs:27">
                    <span>Smaller Daily Choices.</span>
                    <span class="pk-acc">A Better Understanding Of You.</span>
                </p>
                <p class="ai-micro ai-micro--ink">Start with your lifestyle. Discover what you can improve.</p>
            </div>

            <a href="{{ $ailuna }}" class="pk-abs pk-d ai-hot ai-hot--pill ai-hot--rose" style="{{ $hot(662, 838, 353, 62) }}">Explore Your Wellness &rarr;</a>
            <a href="#ai-ecosystem" class="pk-abs pk-d ai-hot ai-hot--pill ai-hot--line" style="{{ $hot(1030, 840, 240, 60) }}">See How It Works &rarr;</a>
            <div class="pk-m pk-btns ai-mbtns">
                <a href="{{ $ailuna }}" class="pk-btn ai-btn ai-btn--rose"><span>Explore Your Wellness</span>@include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])</a>
                <a href="#ai-ecosystem" class="pk-btn ai-btn ai-btn--outline"><span>See How It Works</span>@include($icon, ['name' => 'arrow', 'class' => 'cap-icon', 'stroke' => 1.6])</a>
            </div>

            <p class="pk-abs ai-disclaimer ai-disclaimer--right" style="{{ $at(1276, 852, 300) }}">AI Wellness provides general wellness guidance and does not replace professional medical advice.</p>
        </div>
    </section>

    {{-- ===== 08 · The Intelligence Behind The Experience ===== --}}
    <section class="pk-frame pk-dark" id="ai-ecosystem" aria-labelledby="ai-ecosystem-title">
        <img class="pk-bg" src="{{ $img('08') }}" alt="Lunaray Intelligence Core dikelilingi enam intelligence layer: consumer, market, scientific, skin, product, dan visualization" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(60, 104, 480) }}">
                <p class="pk-eyebrow ai-eyebrow ai-eyebrow--sm">The Intelligence Behind The Experience</p>
                <h2 class="pk-h" id="ai-ecosystem-title" style="--fs:36">
                    <span>More Than AI Tools.</span>
                    <span class="pk-acc">An Intelligence</span>
                    <span class="pk-acc">Ecosystem.</span>
                </h2>
            </div>
            <div class="pk-abs" style="{{ $at(60, 290, 376) }}">
                <p class="pk-lead" style="--fs:14.5">Setiap AI experience Lunaray dibangun di atas intelligence layer yang saling terhubung.</p>
                <p class="pk-p" style="--fs:13.5">Consumer behavior, market signals, scientific evidence, skin insight, product possibilities, dan visualization bekerja bersama untuk membantu Lunaray memahami problem lebih dalam dan mengeksplorasi arah pengembangan dengan lebih baik.</p>
            </div>

            @foreach ($layers as [$lNum, $lTitle, $lCopy, $lX, $lY, $lW])
                <div class="pk-abs ai-node" style="{{ $at($lX, $lY, $lW) }}">
                    <em>{{ $lNum }}</em>
                    <h3>{{ $lTitle }}</h3>
                    <p>{{ $lCopy }}</p>
                </div>
            @endforeach

            <p class="pk-abs pk-d ai-core ai-core--sm" style="{{ $at(916, 486, 256) }}">
                <strong>Lunaray Intelligence Core</strong>
                <span>Data × Science × Insight</span>
                <span>Ideas × People × Impact</span>
            </p>

            <div class="pk-abs" style="{{ $at(60, 574, 440) }}">
                <p class="pk-closing-big ai-payoff-dark" style="--fs:28">
                    <span>Better Inputs.</span>
                    <span>Better Questions.</span>
                    <span class="pk-acc">Better Development</span>
                    <span class="pk-acc">Decisions.</span>
                </p>
                <i class="pk-rule pk-rule--tight"></i>
                <p class="ai-micro">Intelligence connects the dots. <span class="pk-block">Humans decide what they mean.</span></p>
            </div>
        </div>
    </section>

    {{-- ===== 09 · Human × AI × Development ===== --}}
    <section class="pk-frame pk-dark ai-scrim" id="ai-human" aria-labelledby="ai-human-title">
        <img class="pk-bg" src="{{ $img('09') }}" alt="AI mengeksplorasi data, tim expert Lunaray menilai dan memutuskan, lalu produksi dieksekusi di fasilitas manufaktur" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(48, 62, 820) }}">
                <p class="pk-eyebrow ai-eyebrow">Human × AI × Development</p>
                <h2 class="pk-h" id="ai-human-title" style="--fs:46">
                    <span>AI Can Explore.</span>
                    <span class="pk-acc">Experts Must Still Judge.</span>
                </h2>
                <p class="ai-caps-lead">Intelligence becomes valuable when it leads to better human decisions.</p>
            </div>

            @foreach ($stages as [$stIcon, $stNum, $stTitle, $stVerbs, $stX])
                <div class="pk-abs ai-stage" style="{{ $at($stX, 628, 440) }}">
                    <span class="ai-stage-icon">@include($icon, ['name' => $stIcon, 'class' => 'cap-icon', 'stroke' => 1.2])</span>
                    <div>
                        <em>{{ $stNum }}</em>
                        <h3>{{ $stTitle }}</h3>
                        <p>{{ implode(' · ', $stVerbs) }}</p>
                    </div>
                </div>
            @endforeach
            @foreach ([505, 1100] as $arX)
                <span class="pk-abs pk-d ai-stage-arrow" style="{{ $at($arX, 668, 40) }}" aria-hidden="true">&rarr;</span>
            @endforeach

            <p class="pk-abs pk-closing-big ai-closing" style="{{ $at(236, 772, 1200) }}" >
                <span>From <b class="pk-acc">Intelligence</b></span>
                <span>To <b class="pk-acc">Real-World Execution.</b></span>
            </p>
            <p class="pk-abs ai-sigline" style="{{ $at(436, 882, 800) }}">AI Explores. Human Expertise Decides.</p>
        </div>
    </section>

    {{-- ===== 10 · Ask AILUNA ===== --}}
    <section class="pk-frame pk-dark" id="ai-ailuna" aria-labelledby="ai-ailuna-title">
        <img class="pk-bg" src="{{ $img('10') }}" alt="AILUNA, AI development guide Lunaray, dengan kartu pilihan: understand your skin, explore product ideas, discover wellness insights, develop your brand, learn & grow, dan ask AILUNA" width="1672" height="941" loading="lazy" decoding="async">
        <div class="pk-layer">
            <div class="pk-abs" style="{{ $at(48, 96, 380) }}">
                <p class="pk-eyebrow ai-eyebrow--plain">Your Gateway To Lunaray Intelligence</p>
                <h2 class="pk-h" id="ai-ailuna-title" style="--fs:36">
                    <span>Not Sure</span>
                    <span>Where To Start?</span>
                    <span class="pk-acc">Ask AILUNA.</span>
                </h2>
                <p class="pk-p ai-narrow" style="--fs:14">AILUNA membantu Anda menemukan jawaban, insight, dan jalur yang paling relevan&mdash;dari memahami kulit, mengeksplorasi konsep produk, hingga berdiskusi tentang pengembangan brand bersama Lunaray.</p>
            </div>

            <p class="pk-abs pk-d ai-askcard" style="{{ $at(1414, 574, 132) }}">
                <strong>Ask <span class="pk-block">AILUNA</span></strong>
                <span>Consult with AILUNA</span>
            </p>

            @foreach ($gateways as [$gTitle, $gSub, $gHref, $gX, $gY, $gW, $gH])
                <a href="{{ $gHref }}" class="pk-abs pk-d ai-hot ai-hot--card" style="{{ $hot($gX, $gY, $gW, $gH) }}"><span class="visually-hidden">{{ $gTitle }} — {{ $gSub }}</span></a>
            @endforeach
            <a href="{{ $ailuna }}" class="pk-abs pk-d ai-hot ai-hot--bar" style="{{ $hot(306, 716, 1060, 84) }}"><span class="visually-hidden">Ask AILUNA — So, what are you trying to achieve?</span></a>
            @foreach ($prompts as [$prLabel, $prX, $prW])
                <a href="{{ $ailuna }}" class="pk-abs pk-d ai-hot ai-hot--chip {{ $prLabel === 'Regulatory Questions' ? 'ai-hot--reset' : '' }}" style="{{ $hot($prX, 812, $prW, 41) }}">
                    @if ($prLabel === 'Regulatory Questions'){{ $prLabel }}@else<span class="visually-hidden">{{ $prLabel }}</span>@endif
                </a>
            @endforeach

            <ul class="pk-m ai-gates">
                @foreach ($gateways as [$gTitle, $gSub, $gHref])
                    <li><a href="{{ $gHref }}"><strong>{{ $gTitle }}</strong><span>{{ $gSub }}</span></a></li>
                @endforeach
            </ul>
            <a href="{{ $ailuna }}" class="pk-m ai-askbar">Ask AILUNA &mdash; So, what are you trying to achieve? <b>&rarr;</b></a>
            <div class="pk-m pk-chips">
                @foreach ($prompts as [$prLabel])<span>{{ $prLabel }}</span>@endforeach
            </div>

            <p class="pk-abs ai-sigline" style="{{ $at(436, 886, 800) }}">Different Needs. One Intelligent Gateway.</p>
        </div>
    </section>

</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-packaging.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-packaging.css')) }}">
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-ai.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-ai.css')) }}">
@endpush

