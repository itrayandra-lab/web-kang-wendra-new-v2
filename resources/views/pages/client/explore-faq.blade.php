@extends('layouts.client.app')

@section('content')

@php
    $ctaStart = route('beranda') . '#start-development';
    $ctaPath = route('beranda') . '#find-your-path';
    $ctaAiluna = route('beranda') . '#ask-ailuna';

    $faqCategories = [
        [
            'id' => 'a',
            'label' => 'A. Memilih Maklon Kosmetik Terbaik & Terpercaya',
            'items' => [
                [
                    'q' => 'Bagaimana memilih maklon kosmetik terbaik dan terpercaya di Indonesia?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Maklon kosmetik terbaik dan terpercaya sebaiknya dinilai dari kemampuan nyata partner dalam mengembangkan dan memproduksi produk, bukan hanya dari klaim pemasaran.'],
                        ['type' => 'p', 'text' => 'Periksa legalitas dan fasilitas produksi, standard manufacturing, formulation capability, regulatory support, quality system, transparansi proses, scientific capability, pengalaman tim, serta bukti yang mendukung klaimnya.'],
                        ['type' => 'p', 'text' => 'Partner yang baik juga tidak hanya bertanya "mau membuat produk apa?", tetapi berusaha memahami mengapa produk tersebut perlu dibuat dan apakah arah tersebut memang layak dikembangkan.'],
                    ],
                ],
                [
                    'q' => 'Apa ciri-ciri pabrik maklon kosmetik yang terpercaya?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Ciri utama pabrik maklon kosmetik terpercaya adalah transparansi mengenai legalitas, fasilitas produksi, proses development, formulation capability, regulatory support, quality system, serta ketentuan kerja sama, formula, dan intellectual property.'],
                        ['type' => 'p', 'text' => 'Informasi penting tersebut seharusnya dapat dijelaskan dan, ketika relevan, diverifikasi sebelum brand mengambil keputusan.'],
                    ],
                ],
                [
                    'q' => 'Apa yang harus diperiksa sebelum memilih perusahaan maklon kosmetik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Periksa legalitas, standard fasilitas manufacturing, R&D dan formulation capability, regulatory support, MOQ, biaya, timeline, sample, validation, packaging, quality process, serta ketentuan formula dan intellectual property.'],
                        ['type' => 'p', 'text' => 'Jangan membandingkan perusahaan hanya berdasarkan harga per unit. Pastikan juga memahami apa yang termasuk dan tidak termasuk dalam penawaran.'],
                    ],
                ],
                [
                    'q' => 'Apakah maklon kosmetik yang paling murah berarti paling baik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Tidak. Harga paling murah tidak otomatis berarti pilihan maklon kosmetik yang paling tepat.'],
                        ['type' => 'p', 'text' => 'Harga perlu dibandingkan bersama formula, ingredients, packaging, quantity, development depth, testing, regulatory, manufacturing, quality, dan scope layanan.'],
                    ],
                ],
                [
                    'q' => 'Apa yang membedakan Lunaray dari perusahaan maklon kosmetik lainnya?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray tidak langsung memulai dari formula atau produk yang diminta klien; Lunaray memulai dengan memahami problem yang sebenarnya ingin diselesaikan.'],
                        ['type' => 'p', 'text' => 'Consumer problem, business objective, market evidence, scientific evidence, dan expertise yang relevan membantu membentuk product direction sebelum bergerak menuju formulation, validation, dan manufacturing.'],
                        ['type' => 'statement', 'lines' => ["We Don't Start With The Product.", 'We Start With The Problem.']],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray selalu mengikuti semua permintaan produk dari klien?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Tidak otomatis. Permintaan klien merupakan starting point, bukan selalu merupakan keputusan produk final.'],
                        ['type' => 'p', 'text' => 'Lunaray berusaha memahami problem, evidence, feasibility, dan risiko di balik permintaan tersebut sebelum merekomendasikan apakah product direction sebaiknya dilanjutkan, direvisi, dialihkan, ditunda, atau dihentikan.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray akan tetap menyarankan produksi jika hasil analisis menunjukkan produknya kurang tepat?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Tidak otomatis. Lunaray dapat menantang kembali product direction ketika evidence menunjukkan bahwa arah produk belum cukup kuat untuk diteruskan.'],
                        ['type' => 'p', 'text' => 'Tujuannya bukan sekadar membuat apa yang diminta, tetapi membantu klien mengambil keputusan produk yang lebih bertanggung jawab berdasarkan informasi yang tersedia.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray bisa menolak proyek yang sebenarnya menguntungkan?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Bisa. Nilai order atau tekanan komersial tidak otomatis membuat sebuah proyek harus diteruskan.'],
                        ['type' => 'p', 'text' => 'Safety, regulatory compliance, quality requirements, dan release criteria tidak dapat dikompromikan hanya karena nilai proyek, target penjualan, atau deadline komersial.'],
                    ],
                ],
                [
                    'q' => 'Bagaimana Lunaray membantu mengurangi risiko klien membuat produk yang salah?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray berusaha mengurangi risiko keputusan produk dengan memulai dari problem dan evidence sebelum menentukan solusi.'],
                        ['type' => 'p', 'text' => 'Market evidence, scientific evidence, product hypothesis, formulation, validation, dan expertise yang relevan dapat digunakan sebelum produk menuju manufacturing.'],
                        ['type' => 'p', 'text' => 'Pendekatan ini tidak menjamin keberhasilan komersial, tetapi membantu mengurangi keputusan yang hanya dibangun dari asumsi.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray menjamin produk saya akan berhasil di pasar?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Tidak. Lunaray tidak menjanjikan keberhasilan komersial yang tidak dapat dijamin oleh manufacturer.'],
                        ['type' => 'p', 'text' => 'Yang dilakukan Lunaray adalah menggunakan resources yang relevan untuk membantu memperkuat kualitas keputusan produk, mulai dari consumer dan market understanding hingga science, formulation, regulatory, packaging, validation, dan manufacturing.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray memiliki standar fasilitas produksi kosmetik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray memiliki fasilitas produksi dengan status CPKB Kelas A.'],
                        ['type' => 'p', 'text' => 'Status tersebut menjadi salah satu bagian dari manufacturing foundation Lunaray.'],
                    ],
                ],
                [
                    'q' => 'Apa saja standar dan sistem manufacturing yang dimiliki Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray memiliki fasilitas produksi CPKB Kelas A dan telah memiliki Sistem Jaminan Halal (SJH) pabrik.'],
                        ['type' => 'p', 'text' => 'Keduanya menjadi bagian dari manufacturing foundation Lunaray untuk mendukung pengembangan dan produksi kosmetik sesuai ruang lingkup dan ketentuan yang berlaku.'],
                    ],
                ],
            ],
        ],
        [
            'id' => 'b',
            'label' => 'B. Memulai Brand & Product Development',
            'items' => [
                [
                    'q' => 'Apakah pemula bisa membuat brand kosmetik bersama Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Bisa. Anda tidak harus memiliki pengalaman sebelumnya di industri kosmetik atau memiliki konsep produk yang sudah lengkap.'],
                        ['type' => 'p', 'text' => 'Starting point dapat berupa target consumer, business objective, consumer problem, market opportunity, atau ide sederhana.'],
                    ],
                ],
                [
                    'q' => 'Saya baru punya ide produk. Apakah sudah bisa konsultasi?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Bisa. Ide awal tidak harus sudah berupa formula atau product specification lengkap.'],
                        ['type' => 'p', 'text' => 'Ceritakan target consumer, kebutuhan bisnis, problem yang ingin diselesaikan, benchmark, atau product idea yang sedang dipertimbangkan.'],
                    ],
                ],
                [
                    'q' => 'Saya belum tahu produk apa yang harus dibuat. Apakah Lunaray bisa membantu?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Bisa. Lunaray dapat memulai development dari problem atau opportunity, bukan hanya dari product request.'],
                        ['type' => 'p', 'text' => 'Consumer context, market evidence, scientific evidence, dan informasi relevan lainnya dapat digunakan untuk mengeksplorasi product direction sebelum formula ditentukan.'],
                    ],
                ],
                [
                    'q' => 'Apakah harus memiliki perusahaan untuk mulai konsultasi?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Tidak harus untuk memulai diskusi awal mengenai product development.'],
                        ['type' => 'p', 'text' => 'Namun badan usaha, dokumen legal, regulatory, brand ownership, dan requirements lain untuk tahap berikutnya mengikuti pathway serta ketentuan yang berlaku.'],
                    ],
                ],
                [
                    'q' => 'Apakah harus sudah memiliki merek untuk mulai maklon?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Tidak harus untuk memulai diskusi product development.'],
                        ['type' => 'p', 'text' => 'Namun kesiapan merek perlu direncanakan pada tahap yang tepat karena berkaitan dengan commercialization, regulatory process, dan identitas produk.'],
                    ],
                ],
                [
                    'q' => 'Bagaimana cara memulai proyek maklon bersama Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Mulailah dengan menceritakan apa yang ingin Anda capai, siapa target konsumennya, problem yang ingin dijawab, atau produk yang sedang Anda pikirkan.'],
                        ['type' => 'p', 'text' => 'Tim Lunaray membantu memahami starting point dan mengarahkan proyek menuju pathway development yang relevan.'],
                        ['type' => 'cta', 'buttons' => [['label' => 'Start Your Development', 'href' => $ctaStart]]],
                    ],
                ],
                [
                    'q' => 'Dokumen apa saja yang perlu disiapkan untuk memulai proyek maklon kosmetik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Dokumen yang dibutuhkan bergantung pada stage proyek dan status pihak yang bekerja sama dengan Lunaray.'],
                        ['type' => 'p', 'text' => 'Untuk konsultasi awal, klien tidak harus datang dengan seluruh dokumen regulatory yang lengkap. Ketika proyek bergerak menuju commercial dan regulatory execution, dokumen badan usaha, brand, penanggung jawab, dan dokumen lain yang relevan akan diminta sesuai kebutuhan dan ketentuan yang berlaku.'],
                    ],
                ],
            ],
        ],
        [
            'id' => 'c',
            'label' => 'C. Biaya, MOQ & Timeline',
            'items' => [
                [
                    'q' => 'Berapa biaya maklon kosmetik di Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Untuk program promosi White Label tertentu, pengembangan bersama Lunaray dapat dimulai dari Rp4,9 juta.'],
                        ['type' => 'p', 'text' => 'Total investasi aktual bergantung pada produk, quantity, formula, packaging, customization, regulatory requirements, dan scope proyek.'],
                    ],
                ],
                [
                    'q' => 'Apakah bisa maklon kosmetik dengan modal sekitar Rp5 juta?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray memiliki program White Label tertentu dengan titik awal promo Rp4,9 juta.'],
                        ['type' => 'p', 'text' => 'Angka tersebut bukan harga universal untuk seluruh layanan Lunaray. Produk, quantity, specification, packaging, dan ketentuan program perlu dikonfirmasi.'],
                    ],
                ],
                [
                    'q' => 'Berapa MOQ maklon kosmetik di Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Rata-rata MOQ produk kosmetik di Lunaray dimulai dari sekitar 1.000 pcs.'],
                        ['type' => 'p', 'text' => 'MOQ aktual dapat berbeda berdasarkan kategori produk, formula, packaging, pathway, dan manufacturing requirements.'],
                    ],
                ],
                [
                    'q' => 'Apakah MOQ semua produk sama?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Tidak. MOQ dapat berbeda untuk setiap produk.'],
                        ['type' => 'p', 'text' => 'Formula, bahan, packaging, manufacturing process, dan specification dapat memengaruhi minimum production quantity.'],
                    ],
                ],
                [
                    'q' => 'Berapa lama proses maklon kosmetik di Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Proses maklon kosmetik tercepat di Lunaray dapat dimulai dari sekitar 3 minggu untuk pathway dan kondisi tertentu.'],
                        ['type' => 'p', 'text' => 'Custom development dapat membutuhkan waktu lebih panjang karena formulation, prototype revision, validation, packaging, regulatory requirements, dan kesiapan komponen proyek berbeda.'],
                    ],
                ],
                [
                    'q' => 'Apa yang membuat proses maklon membutuhkan waktu lebih lama?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Timeline dapat bertambah ketika proyek membutuhkan formula baru, prototype revision, validation tambahan, packaging khusus, regulatory process, atau komponen yang belum siap.'],
                        ['type' => 'p', 'text' => 'Karena itu timeline sebaiknya ditentukan berdasarkan scope aktual proyek.'],
                    ],
                ],
                [
                    'q' => 'Apakah harga maklon sudah termasuk formula, packaging, BPOM, Halal, dan biaya lainnya?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Komponen yang termasuk dalam harga bergantung pada pathway, produk, dan quotation yang disepakati.'],
                        ['type' => 'p', 'text' => 'Harga awal tidak boleh diasumsikan otomatis mencakup seluruh biaya proyek. Quotation perlu menjelaskan apa yang termasuk dan tidak termasuk, seperti development, sample, packaging, testing, regulatory, manufacturing, dan kebutuhan tambahan lainnya.'],
                    ],
                ],
                [
                    'q' => 'Apa saja yang menentukan harga per pcs produk kosmetik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Harga per unit ditentukan oleh kombinasi formula, ingredients, quantity, packaging, manufacturing process, testing, customization, dan specification proyek.'],
                        ['type' => 'p', 'text' => 'Karena itu dua produk yang terlihat serupa belum tentu memiliki cost structure yang sama.'],
                    ],
                ],
            ],
        ],
        [
            'id' => 'd',
            'label' => 'D. Startup, White Label, OEM, ODM, IPM & OBM',
            'items' => [
                [
                    'q' => 'Apa itu White Label kosmetik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'White Label menggunakan foundation formula atau product base yang sudah tersedia sehingga brand tidak perlu memulai formulation dari nol.'],
                        ['type' => 'p', 'text' => 'Customization dapat dilakukan dalam batas yang sesuai dengan formula dan scope produk.'],
                    ],
                ],
                [
                    'q' => 'Apa itu OEM kosmetik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'OEM relevan ketika klien sudah memiliki formula, specification, benchmark, atau product direction yang relatif jelas.'],
                        ['type' => 'p', 'text' => 'Formula atau specification tetap dapat memerlukan technical review, adaptation, scale-up, atau development sebelum manufacturing.'],
                    ],
                ],
                [
                    'q' => 'Apa itu ODM kosmetik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'ODM relevan ketika brand memiliki objective atau consumer problem tetapi belum memiliki product concept dan formula final.'],
                        ['type' => 'p', 'text' => 'Lunaray dapat mengambil peran development lebih besar dari exploration menuju formulation, validation, dan manufacturing.'],
                    ],
                ],
                [
                    'q' => 'Apa perbedaan OEM dan ODM kosmetik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'OEM umumnya dimulai dari formula atau specification yang lebih jelas dari klien, sedangkan ODM memberi manufacturer peran development yang lebih besar dalam membentuk produk.'],
                    ],
                ],
                [
                    'q' => 'Apa itu jalur Startup Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Startup adalah pathway bagi founder yang ingin mulai memasuki pasar tanpa harus langsung memulai custom development penuh.'],
                        ['type' => 'p', 'text' => 'Mekanisme brand, product base, dan commercial arrangement mengikuti program Startup yang berlaku.'],
                    ],
                ],
                [
                    'q' => 'Apa itu IPM Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'IPM (Intellectual Property Manufacturing) adalah pathway yang menghubungkan knowledge atau intellectual property dari expert dengan peluang product development dan manufacturing.'],
                        ['type' => 'p', 'text' => 'Expert, client brand, dan Lunaray dapat berkolaborasi sesuai kebutuhan proyek. Ownership, licensing, exclusivity, dan commercial arrangement ditentukan secara khusus.'],
                    ],
                ],
                [
                    'q' => 'Apa itu OBM Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'OBM (Original Brand Manufacturing) merupakan model kolaborasi yang menghubungkan brand, business, dan product development.'],
                        ['type' => 'p', 'text' => 'Scope dan commercial arrangement ditentukan berdasarkan struktur kerja sama dan tidak otomatis menjadi layanan brand strategy gratis dari manufacturing Lunaray.'],
                    ],
                ],
                [
                    'q' => 'Apa perbedaan Startup, White Label, OEM, ODM, IPM, dan OBM?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Perbedaannya terutama terletak pada starting point dan kebutuhan development, bukan pada tingkat kualitas.'],
                        ['type' => 'p', 'text' => 'Pathway Lunaray bukan tangga dari "murah" menuju "premium". Setiap pathway menjawab kondisi awal yang berbeda.'],
                    ],
                ],
                [
                    'q' => 'Pathway Lunaray mana yang cocok untuk saya?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Pathway yang tepat ditentukan berdasarkan apa yang sudah Anda miliki dan apa yang masih perlu dikembangkan.'],
                        ['type' => 'p', 'text' => 'Jika belum tahu, Lunaray dapat membantu melakukan diagnosis awal untuk menemukan starting point yang relevan.'],
                        ['type' => 'cta', 'buttons' => [['label' => 'Find Your Path', 'href' => $ctaPath]]],
                    ],
                ],
            ],
        ],
        [
            'id' => 'e',
            'label' => 'E. Formula, R&D & Product Development',
            'items' => [
                [
                    'q' => 'Apakah saya harus memiliki formula sendiri?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Tidak. Anda dapat memulai product development tanpa memiliki formula sendiri.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray menerima custom formula?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Custom formulation dapat menjadi bagian dari product development Lunaray sesuai pathway dan feasibility proyek.'],
                    ],
                ],
                [
                    'q' => 'Apakah saya bisa membawa formula sendiri?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Bisa. Formula yang dimiliki klien dapat menjadi starting point untuk pathway OEM.'],
                        ['type' => 'p', 'text' => 'Formula tetap perlu ditinjau terhadap feasibility, raw material, scale-up, manufacturing, quality, dan regulatory requirements.'],
                    ],
                ],
                [
                    'q' => 'Bisakah Lunaray membuat produk berdasarkan benchmark?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Benchmark dapat digunakan untuk menjelaskan karakter, texture, sensorial, format, positioning, atau target performa yang diinginkan.'],
                        ['type' => 'p', 'text' => 'Benchmark bukan berarti formula milik produk lain akan disalin.'],
                    ],
                ],
                [
                    'q' => 'Bisakah Lunaray membantu menentukan bahan aktif?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Bisa. Ingredient direction dapat dikembangkan berdasarkan consumer problem, scientific evidence, formula compatibility, regulatory considerations, dan product objective.'],
                        ['type' => 'p', 'text' => 'Ingredient yang sedang populer tidak otomatis merupakan pilihan terbaik untuk setiap produk.'],
                    ],
                ],
                [
                    'q' => 'Bagaimana Lunaray mengembangkan produk kosmetik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray menggunakan Evidence-to-Product Method yang menghubungkan problem dan evidence menuju formulation, validation, dan manufacturing.'],
                        ['type' => 'steps', 'items' => [
                            'Problem Discovery & Definition',
                            'Market Evidence',
                            'Scientific Evidence',
                            'Product Hypothesis',
                            'AI-Assisted Product Concept',
                            'Formulation Development',
                            'Validation',
                            'Manufacturing & Release',
                        ]],
                        ['type' => 'p', 'text' => 'Setiap stage memiliki Decision Gate sehingga proyek dapat go, revise, return, pause, atau stop.'],
                    ],
                ],
                [
                    'q' => 'Apakah saya boleh membawa bahan baku sendiri?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Bahan baku dari klien dapat dipertimbangkan, tetapi tidak otomatis dapat digunakan dalam manufacturing Lunaray.'],
                        ['type' => 'p', 'text' => 'Material perlu dievaluasi terhadap specification, documentation, quality requirements, regulatory suitability, formula compatibility, process suitability, supply consistency, dan requirements lain sebelum disetujui.'],
                    ],
                ],
            ],
        ],
        [
            'id' => 'f',
            'label' => 'F. Sample, Validation & Quality',
            'items' => [
                [
                    'q' => 'Apakah saya bisa mendapatkan sample sebelum produksi?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Sample atau prototype dapat menjadi bagian dari product development sebelum manufacturing, tergantung pathway dan scope proyek.'],
                    ],
                ],
                [
                    'q' => 'Apakah sample bisa direvisi?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Prototype dapat direvisi ketika belum memenuhi development criteria yang disepakati.'],
                        ['type' => 'p', 'text' => 'Jumlah revisi, biaya, dan mekanismenya mengikuti pathway dan agreement proyek.'],
                    ],
                ],
                [
                    'q' => 'Apa yang terjadi jika sample belum sesuai dengan yang saya inginkan?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Tim Lunaray dapat mengevaluasi feedback bersama aspek formulation dan feasibility untuk menentukan adjustment yang relevan.'],
                        ['type' => 'p', 'text' => 'Tujuan revisi bukan hanya mengejar preference, tetapi memastikan perubahan masih feasible secara technical, regulatory, quality, dan manufacturing.'],
                    ],
                ],
                [
                    'q' => 'Apakah produk diuji sebelum diproduksi?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Validation dan testing ditentukan berdasarkan formula, product category, claims, risks, regulatory requirements, dan scope development.'],
                        ['type' => 'p', 'text' => 'Tidak semua produk membutuhkan jenis testing yang identik.'],
                    ],
                ],
                [
                    'q' => 'Apa itu validation dalam pengembangan kosmetik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Validation adalah proses untuk menilai apakah product system memenuhi criteria yang ditentukan sesuai scope development.'],
                        ['type' => 'p', 'text' => 'Jenis validation dapat berbeda berdasarkan formula, claims, packaging, manufacturing, quality, dan regulatory requirements.'],
                    ],
                ],
                [
                    'q' => 'Apakah formula laboratorium langsung dapat diproduksi massal?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Tidak selalu. Formula development perlu dievaluasi untuk memastikan dapat diterapkan pada manufacturing scale.'],
                        ['type' => 'p', 'text' => 'Scale-up mempertimbangkan equipment, mixing, process parameters, filling, dan faktor lain yang dapat memengaruhi karakter produk.'],
                    ],
                ],
                [
                    'q' => 'Apa yang terjadi jika hasil produksi berbeda dari sample yang sudah disetujui?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Perbedaan yang relevan antara approved reference dan hasil produksi perlu dievaluasi terhadap product specification dan quality criteria sebelum produk dilepas.'],
                        ['type' => 'p', 'text' => 'Jika ditemukan deviation, tim terkait perlu melakukan evaluation atau investigation untuk menentukan penyebab, dampak, dan tindakan yang sesuai. Commercial urgency tidak boleh menggantikan release criteria.'],
                    ],
                ],
                [
                    'q' => 'Apa yang terjadi jika ada keluhan kualitas setelah produk diproduksi?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Keluhan kualitas perlu ditangani melalui proses pencatatan, traceability, evaluation atau investigation, dan tindakan yang sesuai berdasarkan hasil pemeriksaan.'],
                        ['type' => 'p', 'text' => 'Solusi tidak boleh ditentukan sebelum penyebab dan responsibility dipahami. Bentuk corrective action mengikuti nature of complaint, investigation result, agreement, dan applicable quality procedure.'],
                    ],
                ],
            ],
        ],
        [
            'id' => 'g',
            'label' => 'G. BPOM, Halal, Merek & Regulatory',
            'items' => [
                [
                    'q' => 'Apakah Lunaray membantu proses BPOM?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray dapat mendampingi kebutuhan regulatory yang berkaitan dengan notifikasi BPOM sesuai scope proyek dan ketentuan yang berlaku.'],
                        ['type' => 'p', 'text' => 'Role, dokumen, responsibility, dan timeline ditentukan berdasarkan produk dan struktur kerja sama.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray memiliki Sistem Jaminan Halal pabrik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Ya. Lunaray telah memiliki Sistem Jaminan Halal (SJH) untuk pabrik.'],
                        ['type' => 'p', 'text' => 'Sistem tersebut menjadi bagian dari manufacturing foundation Lunaray untuk mengelola kebutuhan halal sesuai ruang lingkup dan ketentuan yang berlaku.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray membantu proses Halal produk?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray dapat mendampingi kebutuhan halal produk sesuai scope proyek dan peraturan yang berlaku.'],
                        ['type' => 'p', 'text' => 'Keberadaan sistem halal pada fasilitas tidak berarti setiap produk otomatis memperoleh status atau sertifikasi halal; product-specific process tetap mengikuti persyaratan yang berlaku.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray membantu pendaftaran merek atau HKI?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray dapat memberikan informasi dan mendampingi proses pendaftaran merek atau HKI, tetapi keputusan persetujuan atau penolakan berada pada kewenangan Direktorat Jenderal Kekayaan Intelektual (DJKI).'],
                        ['type' => 'p', 'text' => 'Hubungan legal utama dalam proses pendaftaran adalah antara pemohon atau pemilik brand dengan DJKI. Karena itu Lunaray tidak dapat menjamin bahwa sebuah merek akan diterima.'],
                        ['type' => 'p', 'text' => 'Jika terjadi keberatan, usulan penolakan, penolakan, atau kebutuhan tindak lanjut, proses mengikuti ketentuan DJKI dan menjadi kepentingan pemohon dengan pendampingan yang relevan apabila diperlukan.'],
                        ['type' => 'statement', 'lines' => ['Lunaray mendampingi proses ≠ Lunaray menjamin hasil.']],
                    ],
                ],
                [
                    'q' => 'Apakah produk maklon otomatis mendapatkan BPOM?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Tidak. Produk kosmetik tidak otomatis memperoleh notifikasi BPOM hanya karena dikembangkan atau diproduksi melalui perusahaan maklon.'],
                        ['type' => 'p', 'text' => 'Produk dan pihak terkait tetap harus mengikuti regulatory process dan requirements yang berlaku.'],
                    ],
                ],
                [
                    'q' => 'Bagaimana Lunaray menjaga agar klaim produk tidak berlebihan?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Product claim harus sesuai kategori kosmetik, formula, evidence, testing yang relevan, dan regulatory requirements.'],
                        ['type' => 'p', 'text' => 'Istilah seperti clinically proven, scientifically proven, dermatologist approved, safe, atau effective tidak boleh digunakan tanpa evidence dan approval yang sesuai.'],
                    ],
                ],
            ],
        ],
        [
            'id' => 'h',
            'label' => 'H. Science, Research & Institutional Collaboration',
            'items' => [
                [
                    'q' => 'Apakah Lunaray bekerja sama dengan universitas dan institusi penelitian?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Ya. Lunaray berkolaborasi dengan berbagai institusi penelitian dan perguruan tinggi untuk memperkuat research, knowledge exchange, expertise, pendidikan, dan peluang product development.'],
                        ['type' => 'p', 'text' => 'Kolaborasi tersebut mencakup BRIN, Universitas Padjadjaran (Unpad), Institut Teknologi Bandung (ITB), IPB University, Sekolah Tinggi Farmasi Indonesia (STFI), serta berbagai universitas dan institusi lainnya.'],
                    ],
                ],
                [
                    'q' => 'Apa manfaat kolaborasi institusi bagi product development Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Kolaborasi institusional memperluas akses Lunaray terhadap research, scientific knowledge, expertise, dan perspektif multidisiplin yang relevan dengan product development.'],
                        ['type' => 'p', 'text' => 'Kolaborasi dengan sebuah institusi tidak berarti institusi tersebut terlibat atau memberikan endorsement terhadap setiap produk Lunaray.'],
                        ['type' => 'statement', 'lines' => ['Proof > Claims.']],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray melibatkan peneliti, akademisi, dokter, atau expert dalam product development?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Expert dapat dilibatkan ketika expertise mereka relevan dengan problem dan kebutuhan proyek.'],
                        ['type' => 'statement', 'lines' => ['The Right Expertise For The Right Problem.']],
                        ['type' => 'p', 'text' => 'Tidak setiap proyek harus melibatkan semua expert.'],
                    ],
                ],
                [
                    'q' => 'Apakah calon klien bisa mengunjungi pabrik Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Bisa. Lunaray terbuka bagi calon klien untuk mengenal fasilitas dan cara kami bekerja melalui kunjungan pabrik yang terjadwal.'],
                        ['type' => 'p', 'text' => 'Kunjungan mengikuti prosedur akses, hygiene, safety, confidentiality, dan ketentuan area produksi yang berlaku.'],
                        ['type' => 'p', 'text' => 'Fasilitas Lunaray juga digunakan untuk kunjungan industri, kegiatan pembelajaran, dan program magang mahasiswa bersama berbagai institusi pendidikan.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray menerima kunjungan industri dari universitas?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Ya. Lunaray menjadi partner berbagai institusi pendidikan untuk kegiatan yang dapat mencakup kunjungan industri dan pembelajaran mahasiswa.'],
                        ['type' => 'p', 'text' => 'Kegiatan tersebut membantu mempertemukan pembelajaran akademik dengan praktik formulation, product development, regulatory, quality, dan cosmetic manufacturing.'],
                    ],
                ],
                [
                    'q' => 'Apakah mahasiswa bisa magang di Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray menjadi tempat kegiatan magang dan pembelajaran mahasiswa melalui kerja sama dengan berbagai institusi pendidikan.'],
                        ['type' => 'p', 'text' => 'Program, bidang, periode, kuota, selection process, dan bentuk aktivitas mengikuti program yang berlaku serta kesepakatan dengan institusi terkait.'],
                    ],
                ],
            ],
        ],
        [
            'id' => 'i',
            'label' => 'I. Product Categories & Specialty Development',
            'items' => [
                [
                    'q' => 'Produk kosmetik apa saja yang dapat dibuat Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => "Lunaray mengembangkan dan memproduksi berbagai kategori kosmetik seperti skincare, body care, hair care, men's care, personal care, dan kategori beauty lainnya sesuai manufacturing capability."],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray menerima maklon skincare?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Ya. Skincare merupakan salah satu area product development dan manufacturing Lunaray.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray menerima maklon body care dan personal care?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Ya. Body care dan personal care termasuk kategori yang dapat dikembangkan sesuai capability produksi Lunaray.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray bisa mengembangkan intimate care?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Intimate care dapat menjadi specialty development area selama produk dan klaim berada dalam ruang lingkup kosmetik serta regulatory requirements yang relevan.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray dapat mengembangkan skincare untuk kebutuhan kulit yang spesifik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray dapat mengeksplorasi specialized skin needs selama product direction dan claims tetap berada dalam ruang lingkup kosmetik.'],
                        ['type' => 'p', 'text' => 'Kosmetik tidak boleh diposisikan seolah dapat mendiagnosis, mengobati, atau menyembuhkan penyakit tanpa dasar dan kategori regulatory yang sesuai.'],
                    ],
                ],
            ],
        ],
        [
            'id' => 'j',
            'label' => 'J. Packaging, Design & Manufacturing',
            'items' => [
                [
                    'q' => 'Apakah Lunaray membantu memilih packaging kosmetik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Ya. Packaging dapat menjadi bagian dari product development karena perlu dipertimbangkan bersama formula, compatibility, product usage, manufacturing, positioning, dan business requirement.'],
                    ],
                ],
                [
                    'q' => 'Apakah saya bisa membawa packaging sendiri?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Bisa dipertimbangkan. Packaging perlu dievaluasi terhadap formula, filling process, manufacturing equipment, quality, supply consistency, dan regulatory considerations.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray membantu desain label dan packaging?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray dapat membantu mengoordinasikan kebutuhan desain dan packaging sebagai bagian dari kesiapan produk sesuai scope proyek.'],
                        ['type' => 'p', 'text' => 'Namun graphic design, packaging sourcing, technical packaging development, dan regulatory label review merupakan fungsi yang berbeda dan tidak boleh dianggap sebagai satu aktivitas yang sama.'],
                        ['type' => 'p', 'text' => 'Artwork dan label yang akan digunakan tetap perlu melalui review yang relevan sebelum manufacturing.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray hanya membuat konsep atau juga memproduksi kosmetik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray melakukan product development sekaligus manufacturing.'],
                        ['type' => 'p', 'text' => 'Setelah product direction ditentukan, proyek dapat bergerak melalui formulation, validation, scale-up, manufacturing, quality/release process, dan delivery sesuai scope.'],
                    ],
                ],
                [
                    'q' => 'Apakah semua proses dilakukan sendiri oleh Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Tidak semua capability berarti seluruh aktivitas selalu dilakukan secara in-house.'],
                        ['type' => 'p', 'text' => 'Lunaray dapat menghubungkan internal capabilities dengan sister companies, laboratories, experts, research institutions, packaging partners, serta local maupun international specialist networks ketika relevan.'],
                        ['type' => 'p', 'text' => 'Yang penting bukan mengklaim semuanya in-house, tetapi memastikan resource yang tepat digunakan untuk problem yang tepat.'],
                    ],
                ],
            ],
        ],
        [
            'id' => 'k',
            'label' => 'K. Order, Repeat Order & Commercial Workflow',
            'items' => [
                [
                    'q' => 'Bagaimana alur pemesanan maklon Lunaray dari konsultasi sampai pengiriman?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Order workflow Lunaray dimulai dari consultation dan project intake, kemudian bergerak melalui scope dan commercial agreement, development/sample approval sesuai pathway, regulatory dan packaging readiness, manufacturing, quality/release process, hingga delivery.'],
                        ['type' => 'p', 'text' => 'Ini berbeda dari Evidence-to-Product Method: Evidence-to-Product Method adalah bagaimana Lunaray menentukan dan mengembangkan produk, sedangkan Order Workflow adalah bagaimana proyek komersial bergerak dari konsultasi menuju delivery.'],
                    ],
                ],
                [
                    'q' => 'Bagaimana proses repeat order produk Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Repeat order dimulai dengan mengecek kembali product specification, quantity, raw material dan packaging readiness, regulatory status, serta production schedule.'],
                        ['type' => 'p', 'text' => 'Produk yang tidak mengalami perubahan signifikan umumnya tidak perlu memulai development dari nol. Namun perubahan bahan, supplier, packaging, regulation, atau specification dapat memerlukan review tambahan.'],
                        ['type' => 'p', 'text' => 'MOQ, harga, dan lead time mengikuti kondisi aktual repeat order.'],
                    ],
                ],
                [
                    'q' => 'Bagaimana jika setelah development saya memutuskan tidak melanjutkan proyek?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Klien dapat memutuskan tidak melanjutkan proyek, tetapi konsekuensi terhadap development cost, pekerjaan yang sudah dilakukan, material, packaging, regulatory process, dan pembayaran mengikuti agreement proyek.'],
                        ['type' => 'p', 'text' => 'Pembatalan tidak otomatis berarti seluruh biaya yang telah timbul dapat dikembalikan.'],
                    ],
                ],
            ],
        ],
        [
            'id' => 'l',
            'label' => 'L. Formula Ownership & Intellectual Property',
            'items' => [
                [
                    'q' => 'Siapa yang memiliki formula yang dikembangkan bersama Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Kepemilikan formula bergantung pada pathway, sumber formula, scope development, dan agreement proyek.'],
                        ['type' => 'p', 'text' => 'Existing Lunaray formula, custom development, formula milik klien, dan intellectual property dari expert tidak boleh diasumsikan memiliki struktur ownership yang sama.'],
                        ['type' => 'p', 'text' => 'Ketentuan tersebut perlu dinyatakan secara jelas dalam agreement.'],
                    ],
                ],
                [
                    'q' => 'Apakah formula produk saya eksklusif dan tidak digunakan untuk brand lain?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Eksklusivitas formula tidak otomatis sama dengan kepemilikan formula dan bergantung pada pathway serta agreement proyek.'],
                        ['type' => 'p', 'text' => 'White Label memiliki struktur berbeda dari custom development atau IPM. Jika exclusivity penting bagi brand, hal tersebut perlu dibicarakan sejak awal dan dituangkan secara jelas dalam agreement.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray menjaga kerahasiaan formula dan informasi proyek klien?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Informasi formula, business information, product brief, dan dokumen proyek perlu diperlakukan sesuai tingkat confidentiality dan agreement yang berlaku.'],
                        ['type' => 'p', 'text' => 'Hak akses dan penggunaan informasi juga perlu mengikuti ownership dan scope proyek.'],
                    ],
                ],
            ],
        ],
        [
            'id' => 'm',
            'label' => 'M. Klien Luar Kota & International Project',
            'items' => [
                [
                    'q' => 'Apakah saya bisa bekerja sama dengan Lunaray jika berada di luar Bandung atau luar Pulau Jawa?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Secara prinsip, banyak tahap awal product development dapat dilakukan tanpa klien selalu hadir secara fisik di fasilitas Lunaray.'],
                        ['type' => 'p', 'text' => 'Consultation, brief, document exchange, development coordination, dan project communication dapat dilakukan jarak jauh, sementara physical activity mengikuti kebutuhan proyek.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray melayani brand dari seluruh Indonesia?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray dapat bekerja sama dengan klien dari berbagai wilayah Indonesia melalui kombinasi komunikasi jarak jauh dan aktivitas fisik sesuai kebutuhan proyek.'],
                        ['type' => 'p', 'text' => 'Pengiriman sample, documents, packaging, dan finished goods mengikuti kebutuhan dan logistics arrangement proyek.'],
                    ],
                ],
                [
                    'q' => 'Apakah Lunaray dapat bekerja sama dengan perusahaan atau brand dari luar Indonesia?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray terbuka untuk mengeksplorasi international project, tetapi feasibility perlu dinilai berdasarkan destination market, product requirements, regulatory, documentation, logistics, dan struktur kerja sama.'],
                        ['type' => 'p', 'text' => 'Produksi di Indonesia tidak otomatis membuat produk memenuhi regulatory requirements seluruh negara tujuan.'],
                    ],
                ],
            ],
        ],
        [
            'id' => 'n',
            'label' => 'N. AI & Beauty Intelligence',
            'items' => [
                [
                    'q' => 'Bagaimana Lunaray menggunakan AI dalam pengembangan kosmetik?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Lunaray menggunakan AI sebagai intelligence dan acceleration layer dalam product development dan berbagai workflow yang relevan.'],
                        ['type' => 'p', 'text' => 'AI dapat membantu discovery, summarization, consumer/market exploration, scientific-information exploration, hypothesis generation, comparison, visualization, product concept, dan documentation assistance.'],
                    ],
                ],
                [
                    'q' => 'Apa itu AI Product Concept Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'AI Product Concept adalah AI-assisted experience yang membantu mengeksplorasi consumer problem dan business objective menjadi kemungkinan product direction.'],
                        ['type' => 'p', 'text' => 'AI dapat membantu mengeksplorasi concept, positioning, benefit direction, ingredient direction, sensorial, packaging direction, dan visualization sebagai starting point development.'],
                        ['type' => 'p', 'text' => 'Output AI bukan final formula atau regulatory approval.'],
                    ],
                ],
                [
                    'q' => 'Apa itu AILUNA?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'AILUNA adalah AI Development Assistant Lunaray yang membantu memahami kebutuhan awal pengguna dan mengarahkannya menuju informasi atau development pathway yang relevan.'],
                        ['type' => 'p', 'text' => 'AILUNA bukan pengganti formulator, dokter, regulatory authority, QA, atau expert judgement.'],
                    ],
                ],
                [
                    'q' => 'Apakah AI menggantikan formulator, scientist, dokter, atau expert di Lunaray?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Tidak. AI digunakan untuk membantu dan mempercepat exploration, bukan menggantikan professional judgement.'],
                        ['type' => 'p', 'text' => 'Scientific justification, medical interpretation, safety approval, regulatory approval, formula release, claim approval, QA release, dan batch release tetap berada pada human/technical authority yang sesuai.'],
                        ['type' => 'statement', 'lines' => ['AI Accelerates Exploration.', 'Human Expertise Guides The Decision.']],
                    ],
                ],
            ],
        ],
        [
            'id' => 'o',
            'label' => 'O. Next Step',
            'items' => [
                [
                    'q' => 'Saya masih belum tahu pathway yang tepat. Apa langkah berikutnya?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Anda tidak harus menentukan sendiri apakah proyek Anda termasuk Startup, White Label, OEM, ODM, IPM, atau pathway lainnya.'],
                        ['type' => 'p', 'text' => 'Ceritakan target consumer, problem, product idea, formula yang sudah dimiliki, kebutuhan bisnis, budget range, expected volume, dan target timeline. Tim Lunaray membantu menemukan starting point yang relevan.'],
                        ['type' => 'cta', 'buttons' => [['label' => 'Find Your Path', 'href' => $ctaPath]]],
                    ],
                ],
                [
                    'q' => 'Saya masih bingung harus mulai dari mana. Bisakah saya konsultasi terlebih dahulu?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Bisa. Anda tidak perlu memiliki semua jawaban sebelum berbicara dengan Lunaray.'],
                        ['type' => 'p', 'text' => 'Bahkan salah satu fungsi konsultasi awal adalah membantu memahami pertanyaan apa yang sebenarnya perlu dijawab terlebih dahulu sebelum menentukan produk.'],
                        ['type' => 'cta', 'buttons' => [['label' => 'Start Your Development', 'href' => $ctaStart]]],
                    ],
                ],
                [
                    'q' => 'Bisakah saya bertanya kepada AILUNA terlebih dahulu sebelum berbicara dengan tim?',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Bisa. AILUNA dirancang sebagai starting point untuk membantu mengeksplorasi kebutuhan awal dan menemukan informasi yang relevan sebelum atau selama development journey.'],
                        ['type' => 'p', 'text' => 'Ketika kebutuhan sudah memerlukan professional atau commercial decision, conversation dapat diarahkan menuju human team yang relevan.'],
                        ['type' => 'cta', 'buttons' => [['label' => 'Ask AILUNA', 'href' => $ctaAiluna]]],
                    ],
                ],
            ],
        ],
    ];
@endphp

<section class="faq-page-section" id="explore-faq">

    {{-- ----- Intro ----- --}}
    <div class="faqp-intro">
        <div class="hero-eyebrow"><span class="eyebrow-dash"></span>Lunaray FAQ</div>

        <h1 class="hero-heading">
            <span class="hero-heading-bold">Pertanyaan Tentang Maklon<br>& Pengembangan Kosmetik</span>
        </h1>

        <p class="hero-desc">Lunaray adalah perusahaan pengembangan dan manufaktur kosmetik di Indonesia yang membantu founder, brand, dan perusahaan mengembangkan produk dari pemahaman masalah hingga menjadi produk nyata.</p>

        <p class="hero-desc">Pendekatan Lunaray menghubungkan consumer problem, market evidence, scientific evidence, product hypothesis, formulation, validation, regulatory, dan manufacturing untuk membantu klien membuat keputusan produk yang lebih baik sebelum membawanya ke pasar.</p>

        <p class="hero-desc">Di halaman ini Anda dapat menemukan jawaban mengenai maklon kosmetik, pabrik kosmetik, biaya, MOQ, White Label, OEM, ODM, formulasi, BPOM, Halal, CPKB, packaging, manufacturing, research, AI, serta cara memulai pengembangan produk bersama Lunaray.</p>
    </div>

    {{-- ----- Jump nav ----- --}}
    <nav class="faqp-jumpnav" aria-label="Kategori FAQ">
        @foreach ($faqCategories as $cat)
        <a href="#faq-{{ $cat['id'] }}">{{ $cat['label'] }}</a>
        @endforeach
    </nav>

    {{-- ----- Category groups ----- --}}
    <div class="faqp-groups">
        @php $qn = 0; @endphp
        @foreach ($faqCategories as $cat)
        <div class="faqp-group" id="faq-{{ $cat['id'] }}">
            <h2 class="faqp-group-title">{{ $cat['label'] }}</h2>

            <div class="faqp-list">
                @foreach ($cat['items'] as $item)
                @php $qn++; @endphp
                <div class="faqp-item" id="faq-q{{ $qn }}">
                    <button type="button" class="faqp-question" aria-expanded="false">
                        <span class="faqp-index">{{ sprintf('%02d', $qn) }}</span>
                        <span class="faqp-question-text">{{ $item['q'] }}</span>
                        <span class="faqp-toggle" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 -960 960 960" fill="currentColor"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
                        </span>
                    </button>

                    <div class="faqp-accordion">
                        <div class="faqp-accordion-inner">
                            @foreach ($item['blocks'] as $block)
                                @if ($block['type'] === 'p')
                                <p class="faqp-answer">{{ $block['text'] }}</p>
                                @elseif ($block['type'] === 'statement')
                                <div class="faqp-statement">
                                    @foreach ($block['lines'] as $line)
                                    <p>{{ $line }}</p>
                                    @endforeach
                                </div>
                                @elseif ($block['type'] === 'steps')
                                <ol class="faqp-steps">
                                    @foreach ($block['items'] as $step)
                                    <li>{{ $step }}</li>
                                    @endforeach
                                </ol>
                                @elseif ($block['type'] === 'cta')
                                <div class="faqp-inline-cta">
                                    @foreach ($block['buttons'] as $btn)
                                    <a href="{{ $btn['href'] }}" class="faqp-cta-link">
                                        <span>{{ $btn['label'] }}</span>
                                        <svg width="14" height="14" viewBox="0 -960 960 960" fill="currentColor"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                                    </a>
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>

    {{-- ----- Closing CTA ----- --}}
    <div class="faqp-cta-panel">
        <div class="faqp-cta-text">
            <h3 class="faqp-cta-heading">Still Have <span class="faqp-cta-accent">Questions?</span></h3>
            <p class="faqp-cta-micro">You Don't Need All The Answers To Start.</p>
            <p>Ceritakan apa yang ingin Anda capai, masalah konsumen yang ingin Anda jawab, atau produk yang sedang Anda pikirkan. Lunaray membantu Anda memahami titik awalnya dan menemukan langkah development yang relevan.</p>
        </div>
        <div class="faqp-cta-actions">
            <a href="{{ $ctaStart }}" class="glass-btn glass-btn-primary faqp-cta-btn">
                <span>Start Your Development</span>
                <svg width="16" height="16" viewBox="0 -960 960 960" fill="currentColor"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
            </a>
            <a href="{{ $ctaAiluna }}" class="glass-btn faqp-cta-btn">
                <span>Ask AILUNA</span>
                <svg width="16" height="16" viewBox="0 -960 960 960" fill="currentColor"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
            </a>
        </div>
    </div>

</section>

@endsection

@push('structured-data')
@php
    $faqLd = [];
    foreach ($faqCategories as $cat) {
        foreach ($cat['items'] as $item) {
            $parts = [];
            foreach ($item['blocks'] as $blk) {
                if ($blk['type'] === 'p') $parts[] = $blk['text'];
                elseif ($blk['type'] === 'statement') $parts[] = implode(' ', $blk['lines']);
                elseif ($blk['type'] === 'steps') $parts[] = implode(' ', array_map(fn ($t, $n) => ($n + 1) . '. ' . $t, $blk['items'], array_keys($blk['items'])));
            }
            if ($parts) {
                $faqLd[] = ['@type' => 'Question', 'name' => $item['q'], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => trim(strip_tags(implode(' ', $parts)))]];
            }
        }
    }
@endphp
<script type="application/ld+json">{!! json_encode(['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $faqLd], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP) !!}</script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('client/assets/css/lunaray-faq.css') }}?v={{ @filemtime(public_path('client/assets/css/lunaray-faq.css')) }}">
@endpush

@push('scripts')
<script>
    (function () {
        var items = document.querySelectorAll('.faqp-item');
        items.forEach(function (item) {
            var button = item.querySelector('.faqp-question');
            if (!button) return;
            button.addEventListener('click', function () {
                var opening = !item.classList.contains('is-open');
                item.classList.toggle('is-open', opening);
                button.setAttribute('aria-expanded', opening ? 'true' : 'false');
            });
        });

        // Auto-open + scroll to the matching question when arriving via a direct #faq-qN link
        if (window.location.hash) {
            var target = document.querySelector(window.location.hash);
            if (target && target.classList.contains('faqp-item')) {
                target.classList.add('is-open');
                var btn = target.querySelector('.faqp-question');
                if (btn) btn.setAttribute('aria-expanded', 'true');
                setTimeout(function () {
                    target.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 150);
            }
        }
    })();
</script>
@endpush
