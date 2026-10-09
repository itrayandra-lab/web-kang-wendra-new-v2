@extends('layouts.client.app')

@php
    // Single source for both the visible flow lists and the HowTo schema, so they can never disagree.
    $oemSteps = ['Formula / Specification', 'Benchmark / Reference', 'Clear Direction', 'Technical Review & Adaptation', 'Scale-Up & Validation', 'Manufacturing'];
    $odmSteps = ['Consumer Need / Problem', 'Market Insight / Opportunity', 'Product Brief', 'Product Development & Formulation', 'Validation & Optimization', 'Manufacturing'];
@endphp

@section('content')

@php
    $ctaStart = route('beranda') . '#start-development';
    $ctaAiluna = route('beranda') . '#ask-ailuna';
    $waLink = 'https://wa.me/6281234567890';
@endphp

{{-- ===== Develop With Us / Develop Your Product ===== --}}
<section class="dwu-section" id="develop-with-us">

    {{-- ----- Hero: Different Starting Points. Different Paths. ----- --}}
    <div class="dwu-hero" style="--dwu-bg: url('{{ asset('assets/img/lunaray/develop/dwu-bg-1-hero.webp') }}')" role="img" aria-label="Different Starting Points: Startup, White Label, OEM, ODM, IPM, OBM">
        <div class="dwu-hero-inner">
            <div class="dwu-hero-text">
                <div class="hero-eyebrow dwu-eyebrow--light"><span class="eyebrow-dash"></span>Develop Your Product</div>

                <h1 class="hero-heading dwu-hero-heading">
                    <span class="hero-heading-bold">Different Starting Points.</span><br>
                    <span class="hero-heading-accent-bold">Different Paths.</span>
                </h1>

                <p class="hero-desc dwu-hero-desc">Tidak semua brand memulai dari titik yang sama.</p>
                <p class="hero-desc dwu-hero-desc">Ada yang baru ingin memulai, ada yang membutuhkan produk lebih cepat, ada yang sudah memiliki formula atau specification, dan ada yang membutuhkan development, expertise, atau bentuk kolaborasi yang lebih khusus.</p>
                <p class="hero-desc dwu-hero-desc">Karena itu, Lunaray membantu Anda menemukan jalur pengembangan yang sesuai dengan titik awal dan kebutuhan proyek Anda.</p>

                <p class="dwu-hero-tagline">The Right Path Starts With Understanding Where You Are.</p>

                <a href="#dwu-findpath" class="glass-btn dwu-hero-cta">
                    <span>Find Your Path</span>
                    <svg width="16" height="16" viewBox="0 -960 960 960" fill="currentColor"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </a>
            </div>
        </div>
    </div>

    {{-- ----- 02 / Startup ----- --}}
    <div class="dwu-path" id="dwu-startup" style="--dwu-bg: url('{{ asset('assets/img/lunaray/develop/dwu-bg-2-startup.webp') }}')">
        <div class="dwu-path-text">
            <div class="dwu-path-eyebrow">02 / Startup</div>
            <h2 class="hero-heading">
                <span class="hero-heading-bold">Start Small.</span><br>
                <span class="hero-heading-accent-bold">Focus on the Market.</span>
            </h2>

            <p class="hero-desc">Startup adalah jalur bagi founder yang ingin mulai membangun bisnis kosmetik dengan langkah awal yang lebih ringan.</p>
            <p class="hero-desc">Melalui jalur ini, Anda dapat memilih dari ribuan formulasi yang telah tersedia dan stabil, memulai dengan MOQ yang lebih kecil, serta berkolaborasi menggunakan brand yang telah dikembangkan dalam ekosistem Lunaray. Dengan fondasi produk dan brand yang sudah tersedia, Anda dapat lebih fokus pada hal yang paling penting di tahap awal: mengenal konsumen, membangun market, menguji demand, dan mengembangkan penjualan.</p>

            <div class="dwu-cols dwu-cols-3">
                <div class="dwu-col">
                    <div class="dwu-col-title">Best For</div>
                    <ul class="dwu-col-list">
                        <li>First-time founder</li>
                        <li>New beauty entrepreneur</li>
                        <li>Market testing</li>
                    </ul>
                </div>
                <div class="dwu-col">
                    <div class="dwu-col-title">What You Can Start With</div>
                    <ul class="dwu-col-list">
                        <li>Small MOQ</li>
                        <li>Thousands of stable formulas</li>
                        <li>Brand collaboration</li>
                        <li>Manufacturing support</li>
                    </ul>
                </div>
                <div class="dwu-col">
                    <div class="dwu-col-title">Your Focus</div>
                    <ul class="dwu-col-list">
                        <li>Build the market</li>
                        <li>Grow the demand</li>
                        <li>Develop the business</li>
                    </ul>
                </div>
            </div>

            <div class="dwu-quote">&ldquo;A big brand often starts with a bold first step.&rdquo;</div>
        </div>
    </div>

    {{-- ----- 03 / White Label ----- --}}
    <div class="dwu-path dwu-path--reverse" id="dwu-whitelabel" style="--dwu-bg: url('{{ asset('assets/img/lunaray/develop/dwu-bg-3-whitelabel.webp') }}')">
        <div class="dwu-path-text">
            <div class="dwu-path-eyebrow">03 / White Label</div>
            <h2 class="hero-heading">
                <span class="hero-heading-bold">Start Faster.</span><br>
                <span class="hero-heading-accent-bold">Build Under Your Own Brand.</span>
            </h2>

            <p class="hero-desc">White Label adalah jalur bagi founder atau brand yang ingin mempercepat peluncuran produk dengan menggunakan formula yang sudah tersedia dan telah dikembangkan sebelumnya.</p>
            <p class="hero-desc">Anda dapat memilih formula yang sesuai dengan kebutuhan kategori dan market, lalu mengembangkan identitas produk melalui brand, nama produk, packaging, dan ruang customization yang tersedia. Dengan product base yang sudah siap, proses development menjadi lebih sederhana dan cepat dibanding membangun formula sepenuhnya dari awal.</p>

            <div class="dwu-cols dwu-cols-3">
                <div class="dwu-col">
                    <div class="dwu-col-title">Best For</div>
                    <ul class="dwu-col-list">
                        <li>Founder yang ingin lebih cepat launch</li>
                        <li>Existing brand</li>
                        <li>Product extension</li>
                    </ul>
                </div>
                <div class="dwu-col">
                    <div class="dwu-col-title">What You Start With</div>
                    <ul class="dwu-col-list">
                        <li>Own brand</li>
                        <li>Product category</li>
                        <li>Target market</li>
                        <li>Packaging direction</li>
                    </ul>
                </div>
                <div class="dwu-col">
                    <div class="dwu-col-title">Lunaray Provides</div>
                    <ul class="dwu-col-list">
                        <li>Ready formula options</li>
                        <li>Product base</li>
                        <li>Manufacturing support</li>
                        <li>Regulatory support sesuai scope</li>
                    </ul>
                </div>
            </div>

            <div class="dwu-quote">Choose the right product. Build your brand. Go to market faster.</div>
        </div>
    </div>

    {{-- ----- 04 / OEM & ODM ----- --}}
    <div class="dwu-path" id="dwu-oemodm" style="--dwu-bg: url('{{ asset('assets/img/lunaray/develop/dwu-bg-4-oemodm.webp') }}')">
        <div class="dwu-path-text">
            <div class="dwu-path-eyebrow">04 / OEM &amp; ODM</div>
            <h2 class="hero-heading">
                <span class="hero-heading-bold">Custom Development.</span><br>
                <span class="hero-heading-accent-bold">Built Around Your Needs.</span>
            </h2>

            <p class="hero-desc">Untuk brand atau perusahaan yang membutuhkan produk dengan arah yang lebih spesifik, Lunaray menyediakan jalur OEM dan ODM dengan tingkat keterlibatan development yang disesuaikan dengan starting point proyek.</p>
            <p class="hero-desc"><strong>OEM</strong> cocok ketika Anda sudah memiliki arah produk yang cukup jelas&mdash;misalnya formula, specification, benchmark, atau product direction&mdash;dan membutuhkan partner untuk membawanya menuju manufacturing.</p>
            <p class="hero-desc"><strong>ODM</strong> cocok ketika Anda datang dengan objective, consumer need, problem, atau market opportunity, tetapi masih membutuhkan Lunaray mengambil peran lebih aktif dalam development produk.</p>

            <div class="dwu-cols dwu-cols-3">
                <div class="dwu-col">
                    <div class="dwu-col-title">Best For</div>
                    <ul class="dwu-col-list">
                        <li>Growing Brand</li>
                        <li>Established Company</li>
                        <li>New Product Line</li>
                        <li>Market Expansion</li>
                    </ul>
                </div>
                <div class="dwu-col">
                    <div class="dwu-col-title">What You Bring</div>
                    <ul class="dwu-col-list">
                        <li>Formula / Specification</li>
                        <li>Benchmark</li>
                        <li>Product Direction or Market Objective</li>
                    </ul>
                </div>
                <div class="dwu-col">
                    <div class="dwu-col-title">Lunaray Brings</div>
                    <ul class="dwu-col-list">
                        <li>Technical Expertise</li>
                        <li>Product Development</li>
                        <li>Scale-Up &amp; Validation</li>
                        <li>Manufacturing Support</li>
                    </ul>
                </div>
            </div>

            <div class="dwu-flow-compare">
                <div class="dwu-flow-card">
                    <div class="dwu-flow-title">OEM &mdash; You Bring More of the Product</div>
                    <ol class="dwu-flow-steps">
                        @foreach ($oemSteps as $step)
                        <li>{{ $step }}</li>
                        @endforeach
                    </ol>
                </div>
                <div class="dwu-flow-card">
                    <div class="dwu-flow-title">ODM &mdash; You Bring More of the Opportunity</div>
                    <ol class="dwu-flow-steps">
                        @foreach ($odmSteps as $step)
                        <li>{{ $step }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>

            <div class="dwu-quote">Bring your vision. We help make it real.</div>
        </div>
    </div>

    {{-- ----- 05 / IPM ----- --}}
    <div class="dwu-path dwu-path--reverse" id="dwu-ipm" style="--dwu-bg: url('{{ asset('assets/img/lunaray/develop/dwu-bg-5-ipm.webp') }}')">
        <div class="dwu-path-text">
            <div class="dwu-path-eyebrow">05 / IPM (Intellectual Property Manufacturing)</div>
            <h2 class="hero-heading">
                <span class="hero-heading-bold">Connect with Real Expertise.</span><br>
                <span class="hero-heading-accent-bold">Build for a Brighter Tomorrow.</span>
            </h2>

            <p class="hero-desc">IPM adalah jalur kolaborasi yang menghubungkan brand dengan peneliti, profesor, dokter spesialis, apoteker, formulator, dan expert relevan melalui jejaring kolaborasi yang telah dibangun Lunaray.</p>
            <p class="hero-desc">Brand membawa market, consumer need, opportunity, atau product ambition. Para expert membawa research, knowledge, expertise, atau intellectual property yang relevan. Lunaray kemudian berperan sebagai connector, orchestrator, product developer, dan manufacturing partner untuk membawa kolaborasi tersebut menjadi produk nyata.</p>

            <div class="dwu-cols dwu-cols-3">
                <div class="dwu-col">
                    <div class="dwu-col-title">Brand</div>
                    <ul class="dwu-col-list">
                        <li>Market</li>
                        <li>Consumer Need</li>
                        <li>Opportunity</li>
                        <li>Product Ambition</li>
                    </ul>
                </div>
                <div class="dwu-col">
                    <div class="dwu-col-title">Experts &amp; Researchers</div>
                    <ul class="dwu-col-list">
                        <li>Research</li>
                        <li>Knowledge</li>
                        <li>Expertise</li>
                        <li>Intellectual Property</li>
                    </ul>
                </div>
                <div class="dwu-col">
                    <div class="dwu-col-title">Lunaray</div>
                    <ul class="dwu-col-list">
                        <li>Connect</li>
                        <li>Orchestrate</li>
                        <li>Product Development</li>
                        <li>Formulation &amp; Validation</li>
                        <li>Manufacturing</li>
                    </ul>
                </div>
            </div>

            <div class="dwu-quote">The right expertise. The right collaboration. Brought into a real product.</div>
        </div>
    </div>

    {{-- ----- 06 / OBM ----- --}}
    <div class="dwu-path" id="dwu-obm" style="--dwu-bg: url('{{ asset('assets/img/lunaray/develop/dwu-bg-6-obm.webp') }}')">
        <div class="dwu-path-text">
            <div class="dwu-path-eyebrow">06 / OBM (Original Brand Manufacturing)</div>
            <h2 class="hero-heading">
                <span class="hero-heading-bold">Build a Brand</span><br>
                <span class="hero-heading-accent-bold">That Can Last.</span>
            </h2>

            <p class="hero-desc">OBM adalah jalur kolaborasi yang menghubungkan brand dengan brand strategist, market expert, creative specialist, business expert, serta AI brand &amp; marketing expert yang relevan untuk membantu memperkuat arah brand dan market.</p>
            <p class="hero-desc">Melalui kolaborasi ini, brand, insight market, teknologi, product development, dan manufacturing bergerak dalam satu arah sehingga brand yang dikembangkan memiliki fondasi yang lebih kuat, adaptif, dan berkelanjutan di pasar.</p>

            <div class="dwu-cols dwu-cols-3">
                <div class="dwu-col">
                    <div class="dwu-col-title">Brand</div>
                    <ul class="dwu-col-list">
                        <li>Ambition</li>
                        <li>Consumer</li>
                        <li>Market Opportunity</li>
                        <li>Business Goals</li>
                    </ul>
                </div>
                <div class="dwu-col">
                    <div class="dwu-col-title">Brand, Market &amp; AI Experts</div>
                    <ul class="dwu-col-list">
                        <li>Brand Strategy</li>
                        <li>Market Insights</li>
                        <li>Creative Direction</li>
                        <li>Commercial Thinking</li>
                        <li>AI-Enabled Marketing</li>
                    </ul>
                </div>
                <div class="dwu-col">
                    <div class="dwu-col-title">Lunaray</div>
                    <ul class="dwu-col-list">
                        <li>Connect</li>
                        <li>Orchestrate</li>
                        <li>Product Development</li>
                        <li>Manufacturing</li>
                        <li>Ecosystem Support</li>
                    </ul>
                </div>
            </div>

            <div class="dwu-quote">Build the brand right. Adapt with technology. Grow for the long term.</div>
        </div>
    </div>

    {{-- ----- 07 / Find Your Path (Closing CTA) ----- --}}
    <div class="dwu-findpath" id="dwu-findpath" style="--dwu-bg: url('{{ asset('assets/img/lunaray/develop/dwu-bg-7-findpath.webp') }}')">
        <div class="dwu-findpath-inner">
            <div class="dwu-path-eyebrow dwu-eyebrow--light">07 / Find the Right Path</div>
            <h2 class="hero-heading dwu-hero-heading">
                <span class="hero-heading-bold">You Don&rsquo;t Need to Know</span><br>
                <span class="hero-heading-accent-bold">the Path Before We Talk.</span>
            </h2>

            <p class="hero-desc dwu-hero-desc">Tidak semua project langsung cocok dimasukkan ke satu jalur sejak awal.</p>
            <p class="hero-desc dwu-hero-desc">Ceritakan kepada kami apa yang ingin Anda bangun, siapa konsumennya, apa yang sudah Anda miliki, dan apa yang ingin Anda capai.</p>
            <p class="hero-desc dwu-hero-desc">Lunaray akan membantu memahami titik awal Anda dan menentukan jalur development yang paling relevan untuk project tersebut.</p>

            <div class="dwu-flowchart">
                <div class="dwu-flowchart-label">Your Starting Point</div>
                <div class="dwu-flowchart-chips">
                    <span>I have an idea</span>
                    <span>I have a formula</span>
                    <span>I have a brand</span>
                    <span>I want to collaborate</span>
                    <span>I&rsquo;m exploring opportunities</span>
                </div>

                <div class="dwu-flowchart-cards">
                    <a href="#dwu-startup" class="dwu-flowchart-card">
                        <span class="dwu-flowchart-num">01</span>
                        <span class="dwu-flowchart-name">Startup</span>
                        <span class="dwu-flowchart-desc">From Idea to First Product</span>
                    </a>
                    <a href="#dwu-whitelabel" class="dwu-flowchart-card">
                        <span class="dwu-flowchart-num">02</span>
                        <span class="dwu-flowchart-name">White Label</span>
                        <span class="dwu-flowchart-desc">Ready Formula, Your Brand</span>
                    </a>
                    <a href="#dwu-oemodm" class="dwu-flowchart-card">
                        <span class="dwu-flowchart-num">03</span>
                        <span class="dwu-flowchart-name">OEM / ODM</span>
                        <span class="dwu-flowchart-desc">Your Formula, Our Manufacturing</span>
                    </a>
                    <a href="#dwu-ipm" class="dwu-flowchart-card">
                        <span class="dwu-flowchart-num">05</span>
                        <span class="dwu-flowchart-name">IPM</span>
                        <span class="dwu-flowchart-desc">Science Collaboration for Greater Impact</span>
                    </a>
                    <a href="#dwu-obm" class="dwu-flowchart-card">
                        <span class="dwu-flowchart-num">06</span>
                        <span class="dwu-flowchart-name">OBM</span>
                        <span class="dwu-flowchart-desc">Brand &amp; Market Expertise for Sustainable Growth</span>
                    </a>
                </div>

                <div class="dwu-flowchart-arrow">The Right Development Path</div>
                <div class="dwu-flowchart-result">Product Development &amp; Manufacturing</div>
            </div>

            <div class="dwu-findpath-buttons">
                <a href="{{ $ctaStart }}" class="glass-btn glass-btn-primary dwu-findpath-btn">
                    <span>Start Your Development</span>
                    <svg width="16" height="16" viewBox="0 -960 960 960" fill="currentColor"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                </a>
                <a href="{{ $ctaAiluna }}" class="glass-btn dwu-findpath-btn">
                    <svg width="16" height="16" viewBox="0 -960 960 960" fill="currentColor"><path d="M480-80 350-350 80-480l270-130 130-270 130 270 270 130-270 130L480-80Z"/></svg>
                    <span>Ask AILUNA</span>
                </a>
                <a href="{{ $waLink }}" target="_blank" rel="noopener" class="glass-btn dwu-findpath-btn">
                    <svg width="16" height="16" viewBox="0 -960 960 960" fill="currentColor"><path d="M240-400h480v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Z"/></svg>
                    <span>Chat via WhatsApp</span>
                </a>
            </div>

            <p class="dwu-findpath-tagline">We don&rsquo;t start with the product. We start with the problem.</p>
        </div>
    </div>

</section>

@endsection

@push('structured-data')
@php
    $howTo = fn ($name, $desc, $steps) => [
        '@type' => 'HowTo',
        'name' => $name,
        'description' => $desc,
        'step' => array_map(fn ($t, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $t], $steps, array_keys($steps)),
    ];
@endphp
<script type="application/ld+json">{!! json_encode(['@context' => 'https://schema.org', '@graph' => [
    $howTo('Alur pengembangan produk kosmetik jalur OEM di Lunaray', 'Alur OEM Lunaray untuk brand yang sudah membawa formula atau spesifikasi produk, dari tinjauan teknis hingga manufacturing.', $oemSteps),
    $howTo('Alur pengembangan produk kosmetik jalur ODM di Lunaray', 'Alur ODM Lunaray untuk brand yang membawa kebutuhan konsumen dan peluang pasar, dari product brief hingga manufacturing.', $odmSteps),
]], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP) !!}</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-develop.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-develop.css')) }}">
@endpush
