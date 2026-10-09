@extends('layouts.client.app')

@section('content')

{{-- ===== Why Lunaray Is Different ===== --}}
<section class="why-lunaray-section" id="why-lunaray">

    {{-- ----- Part 1: Better Products Begin With Better Decision ----- --}}
    <div class="wl-intro">
        <div class="wl-intro-media">
            <img src="{{ asset('assets/img/lunaray/content/why-hero.webp') }}" alt="Why Lunaray - Better Products Begin With Better Decision" loading="lazy">
            <div class="wl-intro-scrim" aria-hidden="true"></div>
        </div>

        <div class="wl-intro-inner">
            <div class="wl-intro-text">
                <div class="hero-eyebrow"><span class="eyebrow-dash"></span>Why Lunaray</div>

                <h1 class="hero-heading">
                    <span class="hero-heading-bold">Better Products Begin<br>With Better Decision.</span>
                </h1>

                <p class="hero-desc">Lunaray adalah pabrik kosmetik di Indonesia yang membantu founder, brand, dan perusahaan mengembangkan serta memproduksi produk kosmetik melalui layanan maklon dan berbagai jalur pengembangan produk.</p>

                <p class="hero-desc">Kami membantu memahami apa yang ingin dicapai oleh brand, siapa konsumennya, masalah apa yang ingin dijawab, serta evidence apa yang relevan sebelum sebuah ide bergerak menuju formulasi, validasi, dan produksi.</p>

                <p class="hero-desc">Karena formula yang baik belum tentu menghasilkan produk yang tepat. Dan produk yang baik belum tentu menjadi keputusan bisnis yang tepat.</p>
            </div>
        </div>
    </div>

    {{-- ----- Part 1b: That Is Why ----- --}}
    <div class="wl-that-is-why">
        <div class="wl-that-is-why-label">
            <div class="wl-that-is-why-kicker">That Is Why</div>
            <div class="wl-that-is-why-statement">We Don&rsquo;t Start With The Product.<br>We Start With The Problem.</div>
        </div>

        <div class="wl-that-is-why-body">
            <p>Banyak pengembangan kosmetik dimulai dari sebuah permintaan.</p>
            <div>&ldquo;Saya ingin membuat serum.&rdquo;<br>&ldquo;Saya ingin produk dengan bahan aktif ini.&rdquo;<br>&ldquo;Saya ingin produk seperti benchmark ini.&rdquo;</div>
            <div>Di Lunaray, itu bukan akhir dari brief.<br>Itu adalah awal dari pertanyaan.</div>
            <p>Untuk siapa produk ini dibuat? Masalah apa yang ingin dijawab? Mengapa produk ini perlu ada? Apa yang sudah tersedia di pasar? Apa yang dapat kita pelajari dari konsumen, science, dan evidence yang ada?</p>
        </div>
    </div>

    {{-- ----- Part 2: Before We Ask How To Make It ----- --}}
    <div class="wl-decision">
        <div class="wl-decision-media">
            <img src="{{ asset('assets/img/lunaray/content/why-moodboard.webp') }}" alt="Lunaray Product Concept Direction" loading="lazy">
        </div>

        <div class="wl-decision-text">
            <div class="wl-decision-statement">Before We Ask How To Make It,<br>We Ask Whether It Should Be Made.</div>
            <p class="wl-decision-body">Dengan memahami masalah terlebih dahulu, kita mempunyai dasar yang lebih baik untuk menentukan seperti apa produk yang seharusnya dikembangkan.</p>

            <p class="wl-decision-kicker">We Don&rsquo;t Just Say Yes</p>
            <p class="wl-decision-sub">Apa yang membedakan pendekatan Lunaray dalam pengembangan produk kosmetik?</p>
            <p class="wl-decision-body">Lunaray bukan sekadar pabrik yang menerima brief lalu memproduksinya. Kami membantu klien memahami keputusan produk sebelum melangkah lebih jauh. Jika evidence menunjukkan sebuah arah perlu dipertanyakan, diperbaiki, atau memiliki risiko yang perlu dipahami, kami akan membahasnya sejak awal.</p>

            <div class="wl-decision-statement wl-decision-statement--sm">Our job is not simply to move every idea into production.<br>Our job is to help you make a better product decision.</div>
        </div>
    </div>

    {{-- ----- Part 2b: Evidence Before Formulation ----- --}}
    @php
        $wlEvidenceCircles = [
            ['label' => 'Consumer Evidence', 'desc' => 'Apa yang dibutuhkan, dialami, atau belum terjawab oleh konsumen?'],
            ['label' => 'Market Evidence', 'desc' => 'Bagaimana kategori bergerak, produk apa yang sudah ada, dan di mana terdapat ruang yang layak dieksplorasi?'],
            ['label' => 'Scientific Evidence', 'desc' => 'Apa yang dapat didukung oleh pengetahuan ilmiah, ingredient science, formulation science, serta informasi relevan lainnya?'],
        ];
    @endphp
    <div class="wl-evidence">
        <div class="wl-evidence-text">
            <h2 class="hero-heading wl-evidence-heading">
                <span class="hero-heading-bold">Evidence<br>Before Formulation</span>
            </h2>
            <p class="hero-desc">Sebuah formula tidak seharusnya menjadi jawaban sebelum kita cukup memahami pertanyaannya. Karena itu, sebelum formulation development, Lunaray berusaha melihat sebuah peluang produk dari beberapa sumber evidence yang relevan.</p>
            <p class="hero-desc">Pendekatan tersebut dikembangkan lebih lanjut dalam Evidence-to-Product Method, metode pengembangan Lunaray yang menghubungkan problem discovery, evidence, product hypothesis, AI-assisted exploration, formulation, validation, hingga manufacturing.</p>
        </div>

        <div class="wl-evidence-diagram">
            <img src="{{ asset('assets/img/lunaray/content/why-evidence-diagram.webp') }}" alt="Evidence Before Formulation - Consumer, Market, and Scientific Evidence Into Product Hypothesis and Formulation" loading="lazy">

            <div class="wl-evidence-labels">
                @foreach ($wlEvidenceCircles as $circle)
                <div class="wl-evidence-label">
                    <span class="wl-evidence-label-title">{{ $circle['label'] }}</span>
                    <span class="wl-evidence-label-desc">{{ $circle['desc'] }}</span>
                </div>
                @endforeach
            </div>

            <div class="wl-evidence-flow">
                <div class="wl-evidence-flow-item">
                    <span class="wl-evidence-flow-title">Product Hypothesis</span>
                    <span class="wl-evidence-flow-desc">Apa yang sebaiknya dikembangkan?</span>
                </div>
                <svg class="wl-evidence-flow-arrow" width="20" height="20" viewBox="0 -960 960 960" fill="currentColor"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                <div class="wl-evidence-flow-item">
                    <span class="wl-evidence-flow-title">Formulation</span>
                    <span class="wl-evidence-flow-desc">Bagaimana mewujudkannya?</span>
                </div>
            </div>

            <div class="wl-evidence-micro">Science<br>Ideas Into<br>Meaningful<br>Beauty</div>
        </div>
    </div>

    {{-- ----- Part 3: Built On Decades Of Cosmetic Experience ----- --}}
    <div class="wl-legacy">
        <div class="wl-legacy-inner">
            <div class="wl-legacy-text">
                <h2 class="hero-heading">
                    <span class="hero-heading-bold">Built On Decades<br>Of Cosmetic Experience</span>
                </h2>
                <p class="hero-desc">Cara Lunaray mengembangkan produk tidak lahir hanya dari sebuah metodologi. Di baliknya terdapat pengalaman panjang dalam formulasi, regulasi, pengembangan dan produksi kosmetik, pendidikan, serta penelitian.</p>
                <p class="hero-desc">Salah satu figur yang membentuk fondasi tersebut adalah <strong>apt. Cahya Khairani Kusumawulan, M.Farm</strong> yang telah berkarya lebih dari 25 tahun di industri kosmetik.</p>
                <p class="hero-desc">Pengalaman itu tidak hanya diwujudkan melalui pengembangan produk. Sebagai bagian dari dedikasinya terhadap dunia kosmetik dan perkembangan pengetahuan kosmetik di Indonesia, Beliau juga aktif berbagi pengetahuan melalui pendidikan, penelitian, serta penulisan lebih dari 15 buku tentang kosmetik bersama peneliti, profesor, dokter spesialis, dan berbagai kolaborator keilmuan.</p>
                <p class="hero-desc">Perjalanan tersebut ikut membentuk cara Lunaray melihat sebuah produk: bukan hanya apakah produk dapat dibuat, tetapi mengapa produk itu perlu dibuat, evidence apa yang mendukungnya, dan bagaimana mewujudkannya dengan tepat.</p>
            </div>

            <div class="wl-legacy-portrait-col">
                <img class="wl-legacy-portrait" src="{{ asset('assets/img/lunaray/content/why-scientist-portrait.webp') }}" alt="apt. Cahya Khairani Kusumawulan, M.Farm" loading="lazy">
                <img class="wl-legacy-objects" src="{{ asset('assets/img/lunaray/content/why-books-objects.webp') }}" alt="" loading="lazy">
            </div>

            <div class="wl-legacy-stats">
                <div class="wl-legacy-stat">
                    <svg width="22" height="22" viewBox="0 -960 960 960" fill="currentColor"><path d="M320-800v-80h320v80H320Zm40 723v-243q-72-15-116-73t-44-131q0-90 63-153t153-63q90 0 153 63t63 153q0 73-44 131t-116 73v243l-80-40-80 40ZM480-400q57 0 98.5-41.5T620-540q0-57-41.5-98.5T480-680q-57 0-98.5 41.5T340-540q0 57 41.5 98.5T480-400Z"/></svg>
                    <div>
                        <span class="wl-legacy-stat-title">25+ Years</span>
                        <span class="wl-legacy-stat-desc">Cosmetic Experience</span>
                    </div>
                </div>
                <div class="wl-legacy-stat">
                    <svg width="22" height="22" viewBox="0 -960 960 960" fill="currentColor"><path d="M240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h360v80H240v640h480v-360h80v360q0 33-23.5 56.5T720-80H240Zm120-160v-80h240v80H360Zm0-160v-80h240v80H360Zm280-280v-160l160 160H640Z"/></svg>
                    <div>
                        <span class="wl-legacy-stat-title">15+ Books</span>
                        <span class="wl-legacy-stat-desc">Cosmetic Knowledge &amp; Education</span>
                    </div>
                </div>
                <div class="wl-legacy-stat">
                    <svg width="22" height="22" viewBox="0 -960 960 960" fill="currentColor"><path d="M0-240v-64q0-45 44.5-72.5T160-404q14 0 26.5 1t24.5 4q-14 21-21 44t-7 49v66H0Zm240 0v-66q0-38 20.5-69.5T318-427q41-22 87-33.5t95-11.5q49 0 95 11.5t87 33.5q39 22 59.5 53.5T761-306v66H240Zm480 0v-66q0-26-6.5-49T692-399q13-3 25.5-4t26.5-1q71 0 115.5 27.5T904-304v64H720ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Z"/></svg>
                    <div>
                        <span class="wl-legacy-stat-title">Research &amp; Collaboration</span>
                        <span class="wl-legacy-stat-desc">Researchers &middot; Professors &middot; Medical Specialists</span>
                    </div>
                </div>

                <a href="{{ route('beranda') }}#faq" class="wl-legacy-cta">
                    <span>More About the Books</span>
                    <svg width="16" height="16" viewBox="0 -960 960 960" fill="currentColor"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                </a>

                <div class="wl-legacy-tagline">Knowledge Shapes<br>A Brighter Beauty Tomorrow.</div>
            </div>
        </div>
    </div>

    {{-- ----- Part 4: Experience Evolves Into Intelligence ----- --}}
    @php
        $wlAiCards = [
            ['label' => 'Research', 'top' => '8%', 'left' => '4%'],
            ['label' => 'Project Knowledge', 'top' => '2%', 'left' => '26%'],
            ['label' => 'Consumer Insight', 'top' => '34%', 'left' => '2%'],
            ['label' => 'Market Trends', 'top' => '40%', 'left' => '25%'],
            ['label' => 'AI', 'top' => '30%', 'left' => '46%'],
        ];
    @endphp
    <div class="wl-ai">
        <img class="wl-ai-bg" src="{{ asset('assets/img/lunaray/content/why-lab-empty.webp') }}" alt="" loading="lazy">
        <div class="wl-ai-scrim" aria-hidden="true"></div>

        <div class="wl-ai-inner">
            <div class="wl-ai-visual">
                <img class="wl-ai-globe" src="{{ asset('assets/img/lunaray/content/why-globe.webp') }}" alt="Lunaray Intelligence" loading="lazy">

                @foreach ($wlAiCards as $card)
                <div class="wl-ai-card" style="top:{{ $card['top'] }}; left:{{ $card['left'] }};">{{ $card['label'] }}</div>
                @endforeach

                <div class="wl-ai-micro wl-ai-micro--1">Better<br>Insights</div>
                <div class="wl-ai-micro wl-ai-micro--2">Smarter<br>Decisions</div>
                <div class="wl-ai-micro wl-ai-micro--3">More Meaningful<br>Products</div>
            </div>

            <div class="wl-ai-text">
                <h2 class="hero-heading">
                    <span class="hero-heading-bold">Experience Evolves<br>Into Intelligence</span>
                </h2>
                <p class="hero-desc">Pengalaman memberi Lunaray fondasi. Tetapi industri kosmetik terus berkembang begitu pula science, consumer behavior, market, dan teknologi yang membentuknya.</p>
                <p class="hero-desc">Karena itu, Lunaray terus beradaptasi dengan perkembangan teknologi dan mengeksplorasi bagaimana teknologi dapat digunakan secara relevan untuk mendukung kemajuan pengembangan produk kosmetik.</p>
                <p class="hero-desc">AI menjadi salah satu bagian dari evolusi tersebut. Bukan untuk menggantikan pengalaman, keahlian, atau judgement manusia, tetapi sebagai tool yang membantu memperluas eksplorasi, mempercepat research dan pengolahan informasi, serta membantu melihat kemungkinan yang sebelumnya membutuhkan proses lebih panjang.</p>
                <p class="hero-desc">Teknologi memberi kita cara baru untuk mengeksplorasi. Pengalaman dan expertise manusia tetap memberi arah pada keputusan.</p>

                <div class="wl-ai-statement">AI Explores.<br>Human Expertise Decides.</div>
            </div>
        </div>
    </div>

    {{-- ----- Part 5: From Better Decision To Real Products ----- --}}
    @php
        $wlTrustBadges = [
            ['label' => 'CPKB Kelas A', 'icon' => 'M480-80q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Z'],
            ['label' => 'Sistem Jaminan Halal', 'icon' => 'M382-240 154-468l57-57 171 171 367-367 57 57L382-240Z'],
            ['label' => '25+ Years Cosmetic Experience', 'icon' => 'M320-800v-80h320v80H320Zm40 723v-243q-72-15-116-73t-44-131q0-90 63-153t153-63q90 0 153 63t63 153q0 73-44 131t-116 73v243l-80-40-80 40ZM480-400q57 0 98.5-41.5T620-540q0-57-41.5-98.5T480-680q-57 0-98.5 41.5T340-540q0 57 41.5 98.5T480-400Z'],
            ['label' => '15+ Books & Knowledge Contribution', 'icon' => 'M240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h360v80H240v640h480v-360h80v360q0 33-23.5 56.5T720-80H240Zm120-160v-80h240v80H360Zm0-160v-80h240v80H360Zm280-280v-160l160 160H640Z'],
            ['label' => 'Research & Academic Collaboration', 'icon' => 'M0-240v-64q0-45 44.5-72.5T160-404q14 0 26.5 1t24.5 4q-14 21-21 44t-7 49v66H0Zm240 0v-66q0-38 20.5-69.5T318-427q41-22 87-33.5t95-11.5q49 0 95 11.5t87 33.5q39 22 59.5 53.5T761-306v66H240Zm480 0v-66q0-26-6.5-49T692-399q13-3 25.5-4t26.5-1q71 0 115.5 27.5T904-304v64H720ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Z'],
        ];
    @endphp
    <div class="wl-real">
        <div class="wl-real-text">
            <h2 class="hero-heading">
                <span class="hero-heading-bold">From Better Decision<br>To Real Products</span>
            </h2>
            <p class="hero-desc">Semua proses memahami problem, melihat evidence, membangun pengetahuan, dan memanfaatkan teknologi pada akhirnya harus bermuara pada sesuatu yang nyata.</p>
            <p class="hero-desc">Lunaray bukan hanya membantu memikirkan produk. Sebagai pabrik kosmetik, Lunaray membawa product direction menuju development dan manufacturing.</p>
            <p class="hero-desc">Di sinilah pemikiran bertemu dengan kemampuan untuk mewujudkannya&ndash;dari sebuah keputusan produk menjadi produk yang dapat dikembangkan dan diproduksi.</p>

            <div class="wl-real-statement">Better Thinking<br>Should Lead To Better Products.</div>

            <p class="hero-desc">Lunaray tumbuh dari pengalaman, standar manufaktur, pengembangan pengetahuan, dan kolaborasi yang terus dibangun dari waktu ke waktu.</p>

            <div class="wl-real-badges">
                @foreach ($wlTrustBadges as $badge)
                <div class="wl-real-badge">
                    <svg width="20" height="20" viewBox="0 -960 960 960" fill="currentColor"><path d="{{ $badge['icon'] }}"/></svg>
                    <span>{{ $badge['label'] }}</span>
                </div>
                @endforeach
            </div>

            <p class="wl-real-tagline">Real Science. Real People. Real Products.</p>
        </div>

        <div class="wl-real-media">
            <img src="{{ asset('assets/img/lunaray/content/why-manufacturing.webp') }}" alt="Lunaray Cosmetic Manufacturing" loading="lazy">
        </div>
    </div>
</section>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-why.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-why.css')) }}">
@endpush
