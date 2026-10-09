<?php

namespace App\Data;

/**
 * Copy for the Packaging capabilities page (10 frames, transcribed from the
 * "Packaging" brief). Each frame renders over a 1672x941 photo that already
 * carries some of its content (annotations, decision points, closing lines);
 * only the copy that is NOT baked into the photo lives here — plus a
 * `mobile` list for the baked parts, since at phone width the photo text is
 * too small to read and is repeated as HTML below the image.
 *
 * Wording marked "working" in the brief (e.g. the global network line) is
 * kept here as HTML rather than in the photo so it can be revised once the
 * partner network is verified.
 */
class PackagingCapabilities
{
    public static function hero(): array
    {
        return [
            'eyebrow' => 'Packaging Development & Sourcing',
            'title' => ['More Than a Container.', 'Part of the Product.'],
            'lead' => 'Kemasan bukan sekadar tempat untuk sebuah formula.',
            'body' => [
                'Packaging ikut menentukan bagaimana produk dilindungi, digunakan, diproduksi, dirasakan, dan dipersepsikan oleh konsumen.',
                'Melalui jaringan packaging partner di Indonesia dan luar negeri, Lunaray membantu klien mengeksplorasi dan memilih packaging yang sesuai dengan kebutuhan produk, arah brand, dan kebutuhan produksinya.',
            ],
            'ctaPrimary' => 'Explore Packaging',
            'ctaSecondary' => 'Discuss Your Product',
            'features' => [
                ['leaf', 'Local & Global', 'Packaging Network'],
                ['flask', 'Product-Led', 'Approach'],
                ['gear', 'Functional', '& Aesthetic'],
                ['users', 'Tailored', 'to Your Brand'],
            ],
            'micro' => ['Formula', 'Function', 'Experience', 'Brand'],
            'mobile' => [
                ['Product Protection', 'Preserve stability. Maintain integrity.'],
                ['Formula Compatibility', 'Material. Structure. Chemical interaction.'],
                ['Brand Expression', 'Make your product distinctive.'],
                ['Dispensing & Usability', 'Thoughtful design. Better experience.'],
                ['Manufacturing Readiness', 'From concept to production.'],
            ],
        ];
    }

    public static function decision(): array
    {
        return [
            'eyebrow' => 'Packaging Decision System',
            'title' => ["We Don't Start", 'With the Bottle.', 'We Start With', 'What the Product Needs.'],
            'accentFrom' => 2,
            'lead' => 'Packaging yang tepat dimulai dari memahami produknya.',
            'body' => [
                'Bukan hanya bagaimana kemasan terlihat, tetapi bagaimana ia bekerja bersama formula, cara produk digunakan, pengalaman yang ingin dibangun, kebutuhan produksi, dan arah brand.',
                'Karena itu, Lunaray melihat pemilihan packaging sebagai bagian dari proses pengembangan produk—bukan keputusan dekoratif di tahap akhir.',
            ],
            'closingLead' => 'The Right Packaging Is Where',
            'closing' => ['Formula,', 'Function,', 'Experience', '&', 'Brand', 'Meet.'],
            'mobile' => [
                ['01', 'Product', 'What are we building?', 'Format dan karakter produk menjadi titik awal.'],
                ['02', 'Formula', 'What does the formula need?', 'Mempertimbangkan karakter formula dan kebutuhan perlindungannya.'],
                ['03', 'Delivery', 'How should it work?', 'Pump, spray, dropper, tube, jar, atau delivery system lain dipilih sesuai kebutuhan penggunaan.'],
                ['04', 'Consumer', 'How will people use it?', 'Kemudahan, kenyamanan, handling, dispensing, dan pengalaman penggunaan.'],
                ['05', 'Brand', 'What should it communicate?', 'Packaging harus mampu menerjemahkan positioning dan karakter brand.'],
                ['06', 'Production', 'Can it work in production?', 'Pilihan packaging juga perlu mempertimbangkan kebutuhan filling dan proses produksi.'],
                ['07', 'Sourcing', 'Where can we find the right fit?', 'Opsi kemudian dieksplorasi melalui jaringan packaging partner yang relevan.'],
            ],
        ];
    }

    public static function network(): array
    {
        return [
            'eyebrow' => 'Packaging Partner Network',
            'title' => ['Local Access.', 'Global Possibilities.'],
            'lead' => 'Packaging yang tepat tidak selalu datang dari sumber yang sama.',
            'body' => 'Melalui jaringan packaging partner di Indonesia dan luar negeri, Lunaray membantu memperluas pilihan packaging berdasarkan kebutuhan produk, arah brand, kebutuhan produksi, dan karakter project.',
            'statement' => ['Bukan tentang mencari pilihan terbanyak.', 'Tentang menemukan pilihan yang paling tepat.'],
            'local' => 'Akses ke packaging partner lokal untuk kebutuhan project yang lebih sesuai dengan konteks produksi dan pengembangan di Indonesia.',
            // Working wording — revise once the partner network is verified.
            'global' => 'Akses ke jaringan packaging partner internasional untuk mengeksplorasi pilihan, format, teknologi packaging, dan kemungkinan pengembangan yang lebih luas.',
            'mobile' => [
                ['More Sources', 'Pilihan tidak terbatas pada satu supplier.'],
                ['More Possibilities', 'Lebih banyak kemungkinan format dan arah packaging.'],
                ['Better Fit', 'Pilihan diarahkan pada kebutuhan masing-masing project.'],
                ['One Development Connection', 'Eksplorasi packaging tetap terhubung dengan pengembangan produk Lunaray.'],
            ],
            'mobileClosing' => ['The World Is Full of Packaging.', 'The Challenge Is Finding the Right One.', "That's where the network matters."],
        ];
    }

    public static function possibilities(): array
    {
        return [
            'eyebrow' => 'Packaging Possibilities',
            'title' => ['From Standard', 'to Distinctive.'],
            'body' => [
                'Tidak setiap produk membutuhkan kemasan yang sepenuhnya custom.',
                'Terkadang pilihan yang tepat sudah tersedia. Terkadang perlu disesuaikan. Dan pada kebutuhan tertentu, diperlukan eksplorasi yang lebih spesifik.',
            ],
            'lead' => 'Lunaray membantu mencari tingkat pengembangan packaging yang sesuai dengan kebutuhan produk dan arah brand.',
            'levels' => [
                ['01', 'Ready Options', 'Start With What Works.', 'Eksplorasi pilihan packaging yang sudah tersedia dan relevan dengan kebutuhan produk.', ['Faster exploration', 'Existing packaging formats', 'Multiple sourcing options']],
                ['02', 'Customization', 'Make It Yours.', 'Mengembangkan karakter yang lebih khas melalui pilihan material, warna, finishing, decoration, atau elemen packaging lain sesuai opsi yang tersedia.', ['Color & material direction', 'Decoration & finishing', 'Brand application']],
                ['03', 'Distinctive Development', 'Build Something More Distinctive.', 'Untuk kebutuhan tertentu, Lunaray dapat membantu mengeksplorasi kemungkinan packaging yang lebih spesifik melalui packaging partner yang relevan.', ['Special formats', 'Development exploration', 'Partner-based possibilities']],
            ],
            // Formats in the photo's "packaging universe" row, left to right, with
            // their hover hit-areas in photo pixels [x, width].
            'universe' => [
                ['Airless', 62, 110], ['Pump', 172, 128], ['Dropper', 300, 100], ['Spray', 400, 100],
                ['Tube', 500, 92], ['Jar', 592, 116], ['Bottle', 708, 140], ['Stick', 848, 82],
                ['Special Format', 930, 170], ['Secondary Packaging', 1100, 148],
            ],
            'mobileClosing' => ['One Product Need.', 'Many Possible Forms.', "The goal isn't to make packaging different. It's to make it right for the product."],
        ];
    }

    public static function formula(): array
    {
        return [
            'eyebrow' => 'Formula × Packaging',
            'title' => ['The Formula and', 'the Packaging', 'Have to Work Together.'],
            'accentFrom' => 2,
            'body' => [
                'Kemasan bersentuhan langsung dengan produk sepanjang masa penggunaannya.',
                'Karena itu, pilihan packaging perlu mempertimbangkan bukan hanya tampilan, tetapi juga karakter formula, kebutuhan perlindungan, sistem dispensing, cara penggunaan, dan kebutuhan produksi.',
            ],
            'lead' => 'Packaging yang terlihat tepat belum tentu menjadi packaging yang tepat untuk produknya.',
            'mobile' => [
                ['01', 'Compatibility', 'Do they work together?', 'Karakter formula dan material packaging perlu dipertimbangkan sebagai satu sistem.'],
                ['02', 'Protection', 'What needs to be protected?', 'Packaging membantu melindungi produk dari kondisi yang dapat memengaruhi kualitasnya.'],
                ['03', 'Dispensing', 'How should it be delivered?', 'Pump, spray, dropper, tube, jar, dan sistem lainnya memberikan cara penggunaan yang berbeda.'],
                ['04', 'Exposure', 'What happens after opening?', 'Cara produk terpapar selama penggunaan ikut menjadi pertimbangan dalam pemilihan packaging.'],
                ['05', 'Usage', 'How will consumers interact with it?', 'Packaging perlu bekerja sesuai cara produk digunakan dalam kehidupan nyata.'],
                ['06', 'Production', 'Can it work through manufacturing?', 'Packaging juga perlu mempertimbangkan proses filling, handling, dan kebutuhan produksi.'],
            ],
            'mobileClosing' => ["Beautiful Isn't Enough.", 'It Has to Work.', "Good packaging doesn't only hold the formula. It works with it."],
        ];
    }

    public static function experience(): array
    {
        return [
            'eyebrow' => 'Packaging × Experience',
            'title' => ['Packaging Is Also', 'Part of the Experience.'],
            'body' => [
                'Konsumen tidak hanya melihat produk. Mereka memegang, membuka, menekan, menuang, membawa, menyimpan, dan menggunakannya berulang kali.',
                'Karena itu, packaging ikut membentuk pengalaman terhadap produk—mulai dari kemudahan penggunaan hingga bagaimana kualitas dan karakter sebuah brand dirasakan.',
            ],
            'lead' => 'A good package should feel right before, during, and after use.',
            // Card number/title/question are in the photo; descriptions are not.
            'cards' => [
                ['01', 'Handling', 'How does it feel in the hand?', 'Bentuk, ukuran, berat, dan proporsi ikut memengaruhi kenyamanan saat digunakan.'],
                ['02', 'Opening & Closing', 'Is it effortless to use?', 'Cara membuka, menutup, mengunci, atau mengakses produk memengaruhi pengalaman sehari-hari.'],
                ['03', 'Dispensing', 'Does it deliver the right amount?', 'Sistem pump, spray, dropper, tube, atau jar memberi pengalaman penggunaan yang berbeda.'],
                ['04', 'Portability', 'Does it fit real life?', 'Packaging perlu mempertimbangkan bagaimana produk dibawa, disimpan, dan digunakan dalam konteks nyata.'],
                ['05', 'Perceived Value', 'What does the packaging make people feel?', 'Material, finishing, detail, dan interaction ikut membentuk persepsi terhadap kualitas dan positioning brand.'],
            ],
            'mobileClosing' => ['People Remember', 'How a Product Feels.', 'Packaging turns function into experience. Experience turns a product into a brand memory.'],
        ];
    }

    public static function journey(): array
    {
        return [
            'eyebrow' => 'From Need to Packaging',
            'title' => ['From Concept.', 'To The Right Fit.'],
            'body' => 'Menemukan packaging yang tepat bukan satu keputusan instan. Lunaray membantu mengarahkan prosesnya dari memahami kebutuhan produk, mengeksplorasi pilihan melalui packaging network, melihat sample, hingga menentukan opsi yang paling sesuai untuk dilanjutkan ke produksi.',
            'lead' => 'One product need. A guided path to the right packaging.',
            'steps' => [
                ['01', 'Understand', 'What does the product need?', 'Memahami kebutuhan produk, formula, penggunaan, arah brand, dan konteks produksinya.', 'Product Need'],
                ['02', 'Discover', 'What could work?', 'Mengeksplorasi format dan kemungkinan packaging yang relevan.', 'Packaging Possibilities'],
                ['03', 'Connect', 'Where can we find it?', 'Menghubungkan kebutuhan project dengan packaging partner lokal maupun internasional.', 'Packaging Network'],
                ['04', 'See & Feel', 'Make the option tangible.', 'Menghadirkan opsi sample untuk dilihat, disentuh, dan dievaluasi lebih lanjut.', 'Physical Options'],
                ['05', 'Assess', 'Does it fit the product?', 'Mengevaluasi pilihan berdasarkan kebutuhan produk, penggunaan, brand, dan produksi.', 'Evaluation'],
                ['06', 'Decide', 'Choose the right fit.', 'Menentukan opsi packaging yang paling sesuai untuk project.', 'Right Fit'],
                ['07', 'Move Forward', 'Ready for the next stage.', 'Packaging terpilih dilanjutkan sesuai kebutuhan pengembangan dan proses produksi.', 'Product'],
            ],
            'closing' => ["We Don't Just Find Packaging.", 'We Help Narrow the Possibilities.'],
            'closingMicro' => 'From many possible options to one that makes sense for the product.',
        ];
    }

    public static function design(): array
    {
        return [
            'eyebrow' => 'Packaging Design Support',
            'title' => ['Have the Packaging.', 'Need the Design?'],
            'body' => 'Tidak semua brand datang dengan artwork dan arah visual packaging yang sudah siap. Untuk klien yang membutuhkan, tim desain Lunaray dapat membantu mengembangkan tampilan packaging sebagai layanan desain terpisah—agar identitas brand dapat diterjemahkan dengan tepat ke dalam kemasan yang dipilih.',
            'lead' => ['Available when you need it.', 'Separate from packaging sourcing & manufacturing.'],
            'steps' => [
                ['01', 'Visual Direction', 'How should the brand feel?', 'Menerjemahkan karakter dan arah brand menjadi bahasa visual packaging.'],
                ['02', 'Packaging Application', 'How does the identity live on pack?', 'Mengembangkan penerapan elemen visual pada bentuk packaging yang dipilih.'],
                ['03', 'Artwork Development', 'Bring the design together.', 'Menyusun artwork dan elemen desain yang dibutuhkan untuk packaging.'],
                ['04', 'Production Handoff', 'Prepare it for the next stage.', 'Menyiapkan desain untuk diteruskan ke tahapan implementasi yang relevan.'],
            ],
            'from' => ['From Packaging', 'A blank canvas with possibilities.'],
            'to' => ['To Brand Expression', 'Packaging that brings your brand to life.'],
            'own' => [
                'title' => 'Already Have Your Own Design?',
                'accent' => 'Great. We can work with that too.',
                'body' => 'Klien dapat menggunakan tim desain sendiri atau menggunakan dukungan tim desain Lunaray sesuai kebutuhan project.',
            ],
        ];
    }

    public static function connected(): array
    {
        return [
            'eyebrow' => 'One Connected Development System',
            'title' => ['Formula. Packaging.', 'Brand. Production.', 'They Have to Work Together.'],
            'body' => [
                'Produk tidak dibangun dari keputusan yang berdiri sendiri. Formula memengaruhi kebutuhan packaging. Packaging memengaruhi cara produk digunakan. Brand memengaruhi bagaimana produk dipersepsikan. Dan semuanya harus dapat bertemu dengan kebutuhan produksi.',
                'Karena itu, Lunaray melihat packaging sebagai bagian dari satu sistem pengembangan produk yang saling terhubung.',
            ],
            'statement' => "Every decision should serve the product we're trying to build.",
            // Replaces a misspelt line in the photo ("skalation"), patched out of the image.
            'closingMicro' => 'Packaging makes more sense when it is developed in context—not in isolation.',
            'mobile' => [
                ['Formula', 'What goes inside.'],
                ['Packaging', 'How it is protected & delivered.'],
                ['Brand', 'How it is expressed.'],
                ['Production', 'How it becomes real.'],
            ],
            'mobileFlow' => ['Consumer Problem', 'Product Development', 'Real-World Product'],
            'mobileClosing' => ['One Product.', 'One Connected Development System.'],
        ];
    }

    public static function cta(): array
    {
        return [
            'eyebrow' => 'Ready to Explore?',
            'title' => ["Let's Find the Right", 'Packaging', 'for', 'Your Product.'],
            'body' => 'Punya produk yang sedang dikembangkan, membutuhkan pilihan packaging, atau ingin mengeksplorasi kemungkinan yang lebih sesuai dengan kebutuhan brand Anda?',
            'lead' => ['Mulai dari kebutuhan produknya.', 'Lunaray akan membantu mengeksplorasi jalurnya.'],
            'ctaPrimary' => 'Discuss Your Product',
            'ctaSecondary' => 'Explore Packaging',
            'features' => [
                ['flask', 'Science', 'Driven'],
                ['box', 'End-to-End', 'Development'],
                ['users', 'Your Vision', 'Our Expertise'],
            ],
            'strip' => ['Idea', 'Science', 'Packaging', 'Brand', 'Real Impact'],
        ];
    }
}
