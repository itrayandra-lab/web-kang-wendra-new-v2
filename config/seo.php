<?php

return [

    // Only these hosts may be indexed; staging and local get noindex + a blocking robots.txt.
    'indexable_hosts' => array_filter(explode(',', env('SEO_INDEXABLE_HOSTS', 'lunaray.id,www.lunaray.id'))),

    // The one host canonical URLs, sitemaps and llms.txt point to (www redirects/canonicalises to it).
    'primary_host' => env('SEO_PRIMARY_HOST', 'lunaray.id'),

    // Date of the last real content change to the static pages (used as <lastmod> in pages.xml). Update it when copy changes.
    'pages_lastmod' => '2026-10-05',

    // Per-route title + description. Titles ~50-60 chars, descriptions ~140-160 chars.
    'pages' => [
        'beranda' => [
            'title' => 'Maklon Kosmetik Indonesia & Cosmetic Development | Lunaray',
            'description' => 'Pabrik kosmetik dan cosmetic development partner di Indonesia: maklon, White Label, OEM/ODM, custom formulation, BPOM, halal, hingga manufacturing CPKB.',
        ],
        'why-lunaray' => [
            'title' => 'Why Lunaray — Cosmetic Development Berbasis Science',
            'description' => 'Mengapa brand memilih Lunaray: pengembangan produk dari consumer problem, market & scientific evidence, hingga formula dan manufacturing yang konsisten.',
        ],
        'develop-with-us' => [
            'title' => 'Develop With Us — Alur Maklon & Pengembangan Produk',
            'description' => 'Alur kerja maklon kosmetik bersama Lunaray: konsultasi, konsep produk, formulasi, sample, validasi, regulatory BPOM & halal, packaging, hingga produksi.',
        ],
        'capabilities' => [
            'title' => 'Capabilities — Skincare, Body, Hair & Makeup | Lunaray',
            'description' => 'Kapabilitas maklon Lunaray: skincare, body care, hair care, men’s care, baby & kids, personal care, fragrance, dan makeup dengan fasilitas CPKB.',
        ],
        'capabilities.specialty' => [
            'title' => 'Specialty Care — Intimate, Maternal & Sensitive | Lunaray',
            'description' => 'Pengembangan produk specialty care: intimate care, maternal care, sensitive skin, age-focused care, dan specialized body care berbasis evidence.',
        ],
        'capabilities.beyond' => [
            'title' => 'Beyond Cosmetics — Wellness, PKRT & Herbal | Lunaray',
            'description' => 'Lunaray juga mengembangkan produk di luar kosmetik: beauty-from-within, wellness, PKRT, alat kesehatan, dan produk herbal bersama jaringan partner.',
        ],
        'capabilities.packaging' => [
            'title' => 'Packaging Development & Sourcing Kemasan Kosmetik | Lunaray',
            'description' => 'Pengembangan kemasan kosmetik: pemilihan material, sourcing network, kompatibilitas formula-kemasan, hingga dukungan desain packaging untuk brand Anda.',
        ],
        'capabilities.research' => [
            'title' => 'Science & Research — Riset Bahan Aktif Kosmetik | Lunaray',
            'description' => 'Riset Lunaray bersama BRIN, Unpad, ITB, IPB & STFI: soy isoflavone, patin oil, eggshell active, PhytoSync, sacha inchi nanoemulsion, hEGF, exosome.',
        ],
        'ai-concept-builder' => [
            'title' => 'AI Concept Builder — Skin, Product & Wellness AI | Lunaray',
            'description' => 'Lunaray Intelligence: AI Skin Analyzer, AI Product Concept, dan AI Wellness yang membantu eksplorasi ide produk — keputusan akhir tetap oleh expert.',
        ],
        'about' => [
            'title' => 'About Lunaray — Pabrik Kosmetik & Development Ecosystem',
            'description' => 'Lunaray adalah perusahaan pengembangan dan manufaktur kosmetik di Indonesia yang menghubungkan science, expertise, AI, dan manufacturing dalam satu ekosistem.',
        ],
        'beautyversity' => [
            'title' => 'Beautyversity — Research, Science & Innovation | Lunaray',
            'description' => 'Beautyversity by Lunaray: artikel seputar cosmetic research, science, dan inovasi Lunaray untuk founder, brand owner, dan pecinta skincare.',
        ],
        'explore-faq' => [
            'title' => 'FAQ Maklon Kosmetik — Biaya, MOQ, BPOM & Halal | Lunaray',
            'description' => 'Jawaban lengkap seputar maklon kosmetik: biaya, MOQ, timeline, White Label vs OEM/ODM, BPOM, halal, kepemilikan formula, dan pengembangan produk.',
        ],
        'contact' => [
            'title' => 'Contact — Konsultasi Maklon Kosmetik | Lunaray',
            'description' => 'Hubungi Lunaray untuk konsultasi maklon kosmetik, White Label, OEM/ODM, atau custom formulation. Diskusikan project brand Anda bersama tim kami.',
        ],
    ],

];
