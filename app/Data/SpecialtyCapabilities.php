<?php

namespace App\Data;

/**
 * Content for the Specialty Capabilities page (5 specialty care categories).
 *
 * Copy is transcribed from the "dummy web lunaray CAPABILITIES SPECIALTY" design PDF.
 * Image keys resolve to public/assets/img/lunaray/capabilities/specialty/spc-{key}.webp,
 * cropped from that PDF's flattened raster. Icon names map to the shared capabilities
 * icon partial. Titles are line arrays; lines from index `accent` onward render in salmon.
 */
class SpecialtyCapabilities
{
    public static function hero(): array
    {
        return [
            'eyebrow' => 'Specialty Care',
            'title' => ['When Deeper Knowledge', 'Creates Real Possibilities.'],
            'kicker' => 'Specialty care begins where standard categories are not enough.',
            'body' => 'Di Lunaray, specialty care dikembangkan melalui kolaborasi dengan researcher, dokter spesialis, akademisi, formulator, dan expert lintas bidang. Kami menerjemahkan insight ilmiah, kebutuhan khusus, dan pemahaman mendalam tentang konsumen menjadi solusi kosmetik yang relevan, aman, bermakna, dan dapat diproduksi secara nyata.',
            'photo' => 'hero-team',
            'photoAlt' => 'Tim peneliti, dokter, dan formulator Lunaray berdiskusi di laboratorium',
            'script' => ['Science', 'Collaboration', 'Real Impact.'],
            'aside' => ['Research', 'Expertise', 'Formulation', 'Validation', 'Manufacturing', 'Real Impact'],
            'flow' => [
                ['book', 'Research & Insight', ['Scientific Findings', 'Unmet Needs', 'Consumer & Market Insight']],
                ['users', 'Expert Collaboration', ['Doctors & Specialists', 'Researchers & Academics', 'Formulators & Industry Experts']],
                ['flask', 'Formulation & Validation', ['Targeted Development', 'Safety & Stability', 'Real-World Applicability']],
                ['box', 'Specialty Care Solutions', ['Meaningful Products', 'For Specific Needs', 'Ready for the Market']],
            ],
            'signoff' => 'Different people. Different needs. A brighter tomorrow.',
        ];
    }

    public static function pathway(): array
    {
        return [
            'eyebrow' => 'Specialty Care · IPM',
            'title' => ['From Knowledge to', 'Specialized Products.'],
            'kicker' => 'A structured pathway from real needs to real-world solutions.',
            'body' => 'Lunaray menerjemahkan insight ilmiah, kebutuhan spesifik, dan keahlian lintas bidang menjadi produk kosmetik yang relevan, aman, bermakna, dan dapat diproduksi secara nyata melalui pendekatan <strong>IPM — Intellectual Property Manufacturing</strong>.',
            'aside' => ['Specialized care', 'Real expertise', 'Tangible impact'],
            'steps' => [
                ['path-1', 'Research Insight & Specific Need', 'Temuan ilmiah, insight konsumen, dan kebutuhan kosmetik yang belum terpenuhi.'],
                ['path-2', 'Relevant Expertise', 'Mengintegrasikan pengetahuan dari peneliti, dokter spesialis, akademisi, formulator, dan ekspert industri yang relevan.'],
                ['path-3', 'IPM Collaboration', 'Menyelaraskan sains, keahlian, visi brand, dan kapabilitas produksi untuk menentukan arah pengembangan produk yang tepat.'],
                ['path-4', 'Formulation & Validation', 'Pengembangan formula yang terarah, disertai pengujian keamanan, stabilitas, evaluasi efikasi, dan kesesuaian untuk aplikasi di dunia nyata.'],
                ['path-5', 'Manufacturing', 'Dari skala laboratorium ke produksi massal dengan kontrol kualitas yang konsisten dan andal.'],
                ['path-6', 'Specialized Product', 'Solusi kosmetik yang bermakna untuk kebutuhan spesifik, siap untuk pasar.'],
            ],
            'ecosystem' => [
                'label' => 'Built on a Multidisciplinary Ecosystem',
                'items' => [
                    ['microscope', 'Researchers', 'Scientific Findings'],
                    ['stethoscope', 'Specialist Doctors', 'Clinical Perspectives'],
                    ['cap', 'Professors & Academics', 'Deeper Knowledge'],
                    ['flask', 'Formulators', 'Product Development'],
                    ['doc', 'Regulatory Experts', 'Compliance & Safety'],
                    ['gear', 'Manufacturing Team', 'Scalable Production'],
                ],
                'closing' => ['Different needs.', 'Tailored solutions.', 'Real impact.'],
            ],
        ];
    }

    public static function categories(): array
    {
        return [
            self::intimate(),
            self::postpartum(),
            self::sensitive(),
            self::mature(),
            self::bodyCare(),
        ];
    }

    private static function intimate(): array
    {
        return [
            'id' => 'intimate-feminine-care',
            'name' => 'Intimate & Feminine Care',
            'short' => 'Intimate & Feminine',
            'card' => ['img' => 'card-intimate', 'icon' => 'lotus', 'desc' => 'Care for specific intimate-area needs with a focus on gentle, safe, and pH-balanced formulations.', 'tag' => 'Comfort. Balance. Confidence.'],
            'signoff' => 'Real care. Real science. A brighter tomorrow for every woman.',
            'need' => [
                'title' => ['Intimate Care Needs', 'a Different Kind', 'of Attention.'],
                'kicker' => 'Because this area deserves more than a one-size-fits-all approach.',
                'body' => ['Area intim memiliki karakteristik yang unik dan sensitif. Perawatan yang tepat membutuhkan pendekatan ilmiah, pemilihan bahan yang hati-hati, dan formulasi yang lembut namun efektif untuk menjaga kenyamanan, kesehatan, dan keseimbangan alami setiap wanita.'],
                'photo' => 'intimate-portrait',
                'photoAlt' => 'Wanita tersenyum tenang dengan kain satin lembut',
                'script' => ['Healthier Women', 'Brighter Tomorrows.'],
                'aside' => ['Confidence', 'begins', 'with care.'],
                'needs' => [
                    ['shield', 'Area Sensitif', 'Kulit lebih tipis, lebih reaktif.'],
                    ['drop', 'Keseimbangan pH', 'Menjaga flora alami dan kenyamanan sehari-hari.'],
                    ['leaf', 'Pemilihan Bahan', 'Mild, aman, dan telah teruji.'],
                    ['waves-v', 'Kenyamanan Harian', 'Membersihkan, menjaga kesegaran, dan rasa percaya diri.'],
                    ['heart', 'Kebutuhan Spesifik', 'Berbeda di setiap tahap kehidupan wanita.'],
                ],
                'experts' => [
                    'label' => 'Developed through relevant expertise',
                    'items' => [
                        ['uterus', 'Gynecology', 'Kesehatan reproduksi wanita'],
                        ['follicle', 'Dermatology & Sp.DVE', 'Kesehatan kulit area sensitif'],
                        ['flask', 'Cosmetic Science', 'Formulasi yang aman, efektif, dan stabil'],
                        ['network', 'Formulation Experts', 'Pemilihan bahan dan sistem penghantaran yang tepat'],
                    ],
                ],
            ],
            'solutions' => [
                'title' => ['Science-Led Solutions', 'for Every Feminine Need.'],
                'kicker' => 'From sensitive care to everyday confidence. Developed with science. Made for real life.',
                'body' => ['Dengan pendekatan ilmiah, kolaborasi pakar yang relevan, dan kapabilitas formulasi yang teruji, Lunaray menghadirkan berbagai solusi perawatan intimate & feminine yang aman, efektif, dan sesuai dengan kebutuhan nyata wanita di setiap tahap kehidupan.'],
                'photo' => 'intimate-products',
                'photoAlt' => 'Rangkaian produk intimate care Lunaray: intimate wash, foam, fresh mist, dan intimate cream',
                'script' => ['Gentle Science', 'Real Confidence.'],
                'cards' => [
                    ['bubbles', 'Intimate Cleansing', 'Pembersihan yang lembut untuk menjaga keseimbangan area sensitif.', ['Intimate Wash', 'Intimate Foam', 'Gentle Cleansing', 'pH-Balanced Formulas'], 'intimate-tex-1'],
                    ['leaf', 'Freshness & Odor Care', 'Membantu menjaga kesegaran dan rasa nyaman sepanjang hari.', ['Intimate Mist', 'Deodorizing Care', 'Freshness Care', 'On-the-Go Formats'], 'intimate-tex-2'],
                    ['shield', 'Soothing & Comfort Care', 'Menjaga kenyamanan kulit area intim yang lebih sensitif.', ['Soothing Gel', 'Comfort Care', 'Skin Barrier Support', 'External-Area Care'], 'intimate-tex-3'],
                    ['heart', 'Daily Feminine Care', 'Solusi perawatan harian untuk rasa percaya diri di setiap aktivitas.', ['Daily Hygiene', 'Feminine Freshness', 'Travel-Friendly Formats', 'Supporting Formulations'], 'intimate-tex-4'],
                ],
                'experts' => [
                    'label' => 'Backed by relevant expertise',
                    'items' => [
                        ['stethoscope', 'Gynecology', 'Kesehatan reproduksi wanita'],
                        ['follicle', 'Dermatology & Sp.DVE', 'Kesehatan kulit area sensitif'],
                        ['flask', 'Cosmetic Science', 'Formulasi yang aman, efektif, dan stabil'],
                        ['shield', 'Regulatory Experts', 'Kepatuhan & keamanan'],
                        ['gear', 'Manufacturing Excellence', 'Produksi dengan kualitas konsisten'],
                    ],
                ],
            ],
        ];
    }

    private static function postpartum(): array
    {
        return [
            'id' => 'postpartum-maternal-care',
            'name' => 'Postpartum / Maternal Care',
            'short' => 'Postpartum & Maternal',
            'card' => ['img' => 'card-postpartum', 'icon' => 'mother', 'desc' => 'Cosmetic care for the unique needs during and after childbirth, supporting a woman’s changing body and skin.', 'tag' => 'A new journey. Continued care.'],
            'signoff' => 'Real care. Real science. A brighter tomorrow for every woman.',
            'need' => [
                'title' => ['A New Life Begins.', 'Her Care Should', 'Evolve Too.'],
                'kicker' => 'Because every stage of her journey deserves the right support.',
                'body' => ['Setelah melahirkan, tubuh perempuan mengalami banyak perubahan. Perawatan yang tepat, berbasis ilmu pengetahuan, membantu menjaga kenyamanan, kesehatan kulit, dan rasa percaya diri dalam masa pemulihan — agar setiap ibu dapat menjalani peran barunya dengan lebih kuat dan nyaman.'],
                'photo' => 'postpartum-portrait',
                'photoAlt' => 'Ibu memeluk bayinya yang tertidur dengan penuh kasih',
                'script' => ['Stronger Women', 'Brighter Generations.'],
                'aside' => ['Real science.', 'Real care.', 'Brighter tomorrows', 'for mothers', 'and their children.'],
                'needs' => [
                    ['heart', 'Perubahan yang Nyata', 'Kulit, hormon, dan kebutuhan tubuh berubah setelah melahirkan.'],
                    ['shield', 'Perawatan yang Tepat', 'Formulasi yang aman, lembut, dan efektif untuk masa pemulihan.'],
                    ['lotus', 'Kenyamanan Setiap Hari', 'Mendukung kebersihan, kesegaran, dan kesehatan kulit.'],
                    ['mother', 'Percaya Diri Menjalani Peran Baru', 'Karena ibu yang terawat dapat memberikan lebih banyak untuk masa depan.'],
                ],
                'experts' => [
                    'label' => 'Developed through multidisciplinary expertise',
                    'items' => [
                        ['stethoscope', 'Obstetrics & Gynecology', 'Kesehatan ibu'],
                        ['follicle', 'Dermatology & Sp.DVE', 'Kesehatan kulit setelah melahirkan'],
                        ['flask', 'Cosmetic Science', 'Formulasi yang aman, efektif, dan stabil'],
                        ['doc', 'Regulatory Experts', 'Kepatuhan & keamanan'],
                        ['gear', 'Formulation Specialists', 'Solusi yang relevan dan aplikatif'],
                    ],
                ],
            ],
            'solutions' => [
                'title' => ['Thoughtful Solutions', 'for Her Next Chapter.'],
                'kicker' => 'Science-backed personal care for real changes, real life.',
                'body' => ['Lunaray menghadirkan rangkaian produk perawatan yang dirancang khusus untuk mendukung kebutuhan perempuan setelah melahirkan — aman, efektif, dan sesuai dengan perubahan tubuh di setiap tahap pemulihan.'],
                'photo' => 'postpartum-products',
                'photoAlt' => 'Rangkaian produk postpartum care Lunaray: gentle cleansing, soothing care, firming, dan intensive care',
                'script' => ['For Her', 'Stronger Tomorrow.'],
                'cards' => [
                    ['mother', 'Gentle Cleansing & Daily Hygiene', 'Membersihkan dengan lembut dan menjaga kenyamanan setiap hari.', ['Postpartum Body Wash', 'Gentle Feminine Wash', 'Daily Cleansing', 'pH-Balanced Formulas'], 'postpartum-tex-1'],
                    ['leaf', 'Soothing & Comfort Care', 'Membantu memberikan rasa nyaman pada area yang lebih sensitif.', ['Soothing Gel', 'External-Area Care', 'Calming Formulas', 'Comfort Care'], 'postpartum-tex-2'],
                    ['waves-v', 'Skin Recovery & Nourishing Care', 'Merawat kulit yang mengalami perubahan setelah melahirkan.', ['Stretch Mark Care', 'Skin Firming Care', 'Nourishing Lotion', 'Hydrating Body Care'], 'postpartum-tex-3'],
                    ['heart', 'Breast & Maternal Care', 'Perawatan kulit area payudara untuk kenyamanan ibu menyusui.', ['Breast Skin Care', 'Nipple Area Care', 'Moisturizing Care', 'Soothing Formulas'], 'postpartum-tex-4'],
                    ['lotus', 'On-the-Go & Lifestyle Support', 'Solusi praktis untuk mendukung aktivitas ibu di masa pemulihan.', ['Refreshing Mist', 'Travel-Friendly Formats', 'Feminine Freshness', 'Supporting Formulations'], 'postpartum-tex-5'],
                ],
                'experts' => [
                    'label' => 'Backed by relevant expertise',
                    'items' => [
                        ['stethoscope', 'Obstetrics & Gynecology', 'Kesehatan ibu'],
                        ['follicle', 'Dermatology & Sp.DVE', 'Kesehatan kulit setelah melahirkan'],
                        ['flask', 'Cosmetic Science', 'Formulasi yang aman, efektif, dan stabil'],
                        ['shield', 'Regulatory Experts', 'Kepatuhan & keamanan'],
                        ['gear', 'Manufacturing Excellence', 'Produksi dengan kualitas konsisten'],
                    ],
                ],
            ],
        ];
    }

    private static function sensitive(): array
    {
        return [
            'id' => 'sensitive-condition-specific-care',
            'name' => 'Sensitive & Condition-Specific Care',
            'short' => 'Sensitive & Condition-Specific',
            'card' => ['img' => 'card-sensitive', 'icon' => 'shield', 'desc' => 'Cosmetic care for sensitive, reactive-feeling, or condition-specific skin and scalp needs — including special needs such as skin care for people living with diabetes.', 'tag' => 'More understanding. More possibilities.'],
            'signoff' => 'Real care. Real science. A brighter tomorrow for every skin story.',
            'need' => [
                'title' => ['Different Skin Needs', 'Deserve a More', 'Thoughtful Approach.'],
                'kicker' => 'Because every skin story is unique.',
                'body' => ['Kulit sensitif, mudah reaktif, atau memiliki kebutuhan khusus memerlukan pendekatan yang lebih dari sekadar perawatan umum. Kami mengembangkan solusi kosmetik berbasis ilmu pengetahuan, dengan mempertimbangkan kondisi kulit, faktor pemicu, dan kebutuhan spesifik di setiap tahap kehidupan — agar kulit tetap sehat, nyaman, dan percaya diri.'],
                'photo' => 'sensitive-portrait',
                'photoAlt' => 'Peneliti berhijab meneteskan sampel ke cawan petri di laboratorium',
                'aside' => ['Science', 'for real skin.', 'Real people.', 'Real life.'],
                'visual' => ['sensitive-hex', 'Mikroskopi kondisi kulit: kemerahan, kulit kering pecah-pecah, dan kulit kepala'],
                'needs' => [
                    ['shield', 'Lebih Aman untuk Kulit Sensitif', 'Formulasi yang lembut, teruji, dan minim risiko iritasi.'],
                    ['drop', 'Mendukung Skin Barrier', 'Menjaga kekuatan kulit agar tetap sehat dan tahan terhadap faktor pemicu.'],
                    ['network', 'Sesuai Kondisi dan Kebutuhan', 'Dirancang untuk berbagai kondisi kulit dan fase kehidupan, termasuk kulit dengan kebutuhan khusus.'],
                    ['flask', 'Berbasis Ilmu Pengetahuan', 'Menggabungkan riset, keahlian klinis, dan formulasi yang teruji.'],
                    ['heart', 'Untuk Kualitas Hidup yang Lebih Baik', 'Kulit yang lebih sehat, nyaman, dan percaya diri di setiap aktivitas.'],
                ],
                'experts' => [
                    'label' => 'Developed through multidisciplinary expertise',
                    'items' => [
                        ['stethoscope', 'Dermatology', 'Kesehatan kulit area sensitif'],
                        ['uterus', 'Obstetrics & Gynecology', 'Kesehatan wanita'],
                        ['flask', 'Cosmetic Science', 'Formulasi yang aman, efektif, dan stabil'],
                        ['doc', 'Regulatory Experts', 'Kepatuhan & keamanan'],
                        ['gear', 'Formulation Specialists', 'Solusi yang relevan dan aplikatif'],
                    ],
                ],
            ],
            'solutions' => [
                'title' => ['Targeted Solutions', 'for Unique Skin Needs.'],
                'kicker' => 'Science-backed formulations for real people, real conditions.',
                'body' => ['Lunaray menghadirkan rangkaian solusi perawatan yang dikembangkan secara ilmiah untuk berbagai jenis kulit sensitif dan kebutuhan khusus. Dengan formulasi yang aman, efektif, dan sesuai karakteristik tiap kondisi, kami membantu setiap individu merawat kulit dengan lebih tepat dan percaya diri.'],
                'photo' => 'sensitive-products',
                'photoAlt' => 'Rangkaian produk sensitive care Lunaray: gentle cleanser, barrier support moisturizer, soothing serum, dan scalp care',
                'cards' => [
                    ['leaf', 'Gentle Cleansing & Daily Care', 'Membersihkan dengan lembut tanpa mengganggu skin barrier.', ['Gentle Facial Cleanser', 'Low-Irritation Body Wash', 'pH-Balanced Formulas', 'Soap-Free Options'], 'sensitive-tex-1'],
                    ['shield', 'Barrier Support & Moisturizing Care', 'Menjaga dan memperkuat skin barrier untuk kulit yang mudah sensitif.', ['Barrier Repair Cream', 'Intensive Moisturizer', 'Ceramide-Based Care', 'Soothing Lotion'], 'sensitive-tex-2'],
                    ['waves-v', 'Soothing & Calming Care', 'Membantu meredakan rasa tidak nyaman pada kulit reaktif dan mudah iritasi.', ['Soothing Gel', 'Calming Serum', 'Anti-Redness Care', 'Cooling Formulas'], 'sensitive-tex-3'],
                    ['hexagons', 'Condition-Specific Body Care', 'Perawatan yang disesuaikan dengan kondisi tertentu, seperti kulit kering, sensitif, atau rentan masalah akibat faktor internal maupun eksternal.', ['Targeted Body Moisturizer', 'Urea-Based Formulas', 'Ultra-Gentle Care', 'Protective Daily Care'], 'sensitive-tex-4'],
                    ['follicle', 'Scalp & Hair Specific Care', 'Formulasi khusus untuk menjaga kesehatan kulit kepala dan rambut yang sensitif atau memiliki kebutuhan khusus.', ['Gentle Scalp Cleanser', 'Soothing Scalp Serum', 'Anti-Dandruff Care', 'Scalp Barrier Support'], 'sensitive-tex-5'],
                    ['lotus', 'Daily Lifestyle Support', 'Solusi praktis untuk perawatan sehari-hari yang aman dan nyaman digunakan.', ['Fragrance-Control Options', 'Travel-Friendly Formats', 'Multipurpose Formulas', 'For Active Lifestyles'], 'sensitive-tex-6'],
                ],
                'experts' => [
                    'label' => 'Developed through multidisciplinary expertise',
                    'items' => [
                        ['stethoscope', 'Dermatology', 'Kesehatan kulit area sensitif'],
                        ['uterus', 'Obstetrics & Gynecology', 'Kesehatan wanita'],
                        ['flask', 'Cosmetic Science', 'Formulasi yang aman, efektif, dan stabil'],
                        ['doc', 'Regulatory Experts', 'Kepatuhan & keamanan'],
                        ['gear', 'Manufacturing Excellence', 'Produksi dengan kualitas konsisten'],
                    ],
                ],
            ],
        ];
    }

    private static function mature(): array
    {
        return [
            'id' => 'mature-age-focused-care',
            'name' => 'Mature / Age-Focused Care',
            'short' => 'Mature & Age-Focused',
            'card' => ['img' => 'card-mature', 'icon' => 'hourglass', 'desc' => 'Products developed around changing skin needs across different life stages.', 'tag' => 'At every stage. Still you.'],
            'signoff' => 'Real care. Real science. A brighter tomorrow for every stage of life.',
            'need' => [
                'title' => ['As Skin Evolves,', 'Care Should', 'Evolve With It.'],
                'kicker' => 'Different life stages. Different needs. The same commitment to healthy skin.',
                'body' => ['Seiring bertambahnya usia, kulit mengalami perubahan alami — seperti penurunan hidrasi, perubahan elastisitas, tekstur yang mulai berbeda, dan peningkatan sensitivitas. Lunaray mengembangkan solusi perawatan yang berbasis ilmu pengetahuan, dirancang khusus untuk mendukung kebutuhan kulit di setiap tahap kehidupan, agar kulit tetap sehat, terawat, dan nyaman.'],
                'photo' => 'mature-portrait',
                'photoAlt' => 'Wanita paruh baya tersenyum dengan kulit yang sehat dan terawat',
                'script' => ['Science for a more', 'confident tomorrow.'],
                'aside' => ['Research', 'formulation', 'for healthy skin', 'at every stage', 'of life.'],
                'visual' => ['mature-stages', 'Ilustrasi lapisan kulit pada tahap youthful, transition, dan mature'],
                'needs' => [
                    ['drop', 'Menjaga Hidrasi', 'Kulit tetap lembap dan terasa nyaman.'],
                    ['waves-v', 'Mendukung Elastisitas', 'Membantu menjaga tampilan kulit tetap kenyal dan sehat.'],
                    ['shield', 'Merawat Skin Barrier', 'Menjaga kekuatan kulit dari faktor eksternal.'],
                    ['sparkles', 'Menunjang Tampilan Kulit', 'Kulit tampak lebih halus, sehat, dan bercahaya.'],
                ],
                'experts' => [
                    'label' => 'Developed through multidisciplinary expertise',
                    'items' => [
                        ['stethoscope', 'Dermatology', 'Kesehatan kulit di setiap tahap usia'],
                        ['network', 'Cosmetic Science', 'Formulasi yang aman, efektif, dan stabil'],
                        ['flask', 'Formulation Experts', 'Solusi yang relevan dan aplikatif'],
                        ['doc', 'Regulatory Support', 'Kepatuhan & keamanan'],
                        ['gear', 'Manufacturing Excellence', 'Produksi dengan kualitas konsisten'],
                    ],
                ],
            ],
            'solutions' => [
                'title' => ['Complete Solutions', 'for Every Stage', 'of Her Skin Journey.'],
                'kicker' => 'Science-backed formulations for real people, real life stages.',
                'body' => ['Lunaray menghadirkan rangkaian solusi perawatan yang diformulasikan khusus untuk kebutuhan kulit yang berkembang seiring bertambahnya usia — dengan pendekatan ilmiah, bahan aktif yang tepat, dan formulasi yang aman, efektif, serta sesuai dengan karakteristik kulit di setiap tahap kehidupan.'],
                'photo' => 'mature-products',
                'photoAlt' => 'Rangkaian produk mature skin care Lunaray: cleanser, radiance essence, firming serum, renewal cream, eye care, dan neck care',
                'script' => ['Timeless Care', 'Brighter Tomorrow.'],
                'compact' => true,
                'cards' => [
                    ['stethoscope', 'Cleansing & Preparation', 'Membersihkan dengan lembut tanpa mengganggu skin barrier.', ['Gentle Cleanser', 'Cream Cleanser', 'Micellar Cleanser', 'pH-Balanced Formulas']],
                    ['drop', 'Essence & Hydration Care', 'Mengembalikan kelembapan dan mempersiapkan kulit untuk penyerapan bahan aktif.', ['Hydrating Toner', 'Essence', 'Boosting Lotion', 'Pre-Serum Care']],
                    ['network', 'Targeted Serum Care', 'Perawatan intensif untuk membantu menjaga tampilan kulit tetap sehat dan bercahaya.', ['Brightening Serum', 'Firming Serum', 'Barrier Support Serum', 'Multi-Active Formulas']],
                    ['shield', 'Moisturizer & Nourishing Care', 'Menjaga hidrasi, memperkuat skin barrier, dan membantu kulit tampak lebih halus.', ['Daily Moisturizer', 'Rich Cream', 'Night Cream', 'Ceramide-Based Care']],
                    ['eye', 'Eye Area Care', 'Perawatan khusus untuk area mata yang lebih sensitif.', ['Eye Cream', 'Eye Serum', 'Depuffing Care', 'Brightening Care']],
                    ['neck', 'Neck & Décolleté Care', 'Menjaga kulit leher dan dada tetap terawat dan tampak lebih kencang.', ['Firming Cream', 'Smoothing Lotion', 'Hydrating Care', 'Targeted Formulas']],
                    ['user', 'Body Care for Mature Skin', 'Perawatan tubuh untuk kulit yang lebih kering dan membutuhkan nutrisi ekstra.', ['Nourishing Body Lotion', 'Firming Body Care', 'Brightening Body Care', 'Comforting Formulas']],
                    ['follicle', 'Scalp & Hair Care', 'Formulasi khusus untuk menjaga kesehatan kulit kepala dan rambut.', ['Scalp Cleanser', 'Scalp Serum', 'Hair Strengthening Care', 'Soothing Formulas']],
                ],
                'experts' => [
                    'label' => 'Developed through multidisciplinary expertise',
                    'items' => [
                        ['stethoscope', 'Dermatology', 'Kesehatan kulit di setiap tahap usia'],
                        ['apple', 'Nutritional & Lifestyle Insight', 'Pendekatan holistik untuk hasil optimal'],
                        ['flask', 'Cosmetic Science', 'Formulasi yang aman, efektif, dan stabil'],
                        ['doc', 'Regulatory Experts', 'Kepatuhan & keamanan'],
                        ['gear', 'Manufacturing Excellence', 'Produksi dengan kualitas konsisten'],
                    ],
                ],
            ],
        ];
    }

    private static function bodyCare(): array
    {
        return [
            'id' => 'specialized-body-care',
            'name' => 'Specialized Body Care',
            'short' => 'Specialized Body Care',
            'card' => ['img' => 'card-body', 'icon' => 'target', 'desc' => 'Targeted cosmetic care for specific body areas, concerns, or usage contexts.', 'tag' => 'Targeted care. Real daily impact.'],
            'signoff' => 'Real care. Real science. A brighter tomorrow for every individual.',
            'need' => [
                'title' => ['When Body Care', 'Needs to Be', 'More Specific.'],
                'accent' => 2,
                'kicker' => 'Different areas. Different concerns. More targeted thinking.',
                'body' => [
                    'Lunaray membantu brand mengembangkan specialized body care untuk kebutuhan tubuh yang lebih spesifik — mulai dari kulit sangat kering dan kasar, area yang rentan terhadap gesekan dan bau, body acne-prone concerns, uneven tone dan texture, hingga kebutuhan barrier dan kulit tubuh yang sensitif.',
                    'Pengembangan dimulai dari area penggunaan, karakteristik kulit, kebutuhan konsumen, serta konteks pemakaian untuk menentukan arah formulasi dan format produk yang relevan.',
                ],
                'photo' => 'body-scientist',
                'photoAlt' => 'Peneliti wanita dengan kacamata pelindung mengamati sampel di cawan petri',
                'script' => ['Targeted Care', 'for Real Life.'],
                'aside' => ['Real people.', 'Real skin.', 'Real solutions.'],
                'visual' => ['body-areas', 'Close-up area tubuh: acne-prone, dry & rough, odor-prone, friction areas, uneven tone, dan sensitive skin'],
                'visualLabels' => ['Acne-Prone', 'Dry & Rough', 'Odor-Prone', 'Friction Areas', 'Uneven Tone', 'Sensitive Skin'],
                'areas' => [
                    ['body-area-1', 'dots', 'Body Acne-Prone Care', ['Back', 'Chest', 'Shoulder', 'Other acne-prone body areas']],
                    ['body-area-2', 'waves', 'Very Dry & Rough Skin', ['Dryness', 'Rough texture', 'Flaking', 'Intensive moisture needs']],
                    ['body-area-3', 'shield', 'Odor-Prone Areas', ['Underarms', 'Feet', 'Body folds', 'Daily freshness needs']],
                    ['body-area-4', 'waves', 'Friction & Fold Care', ['Inner thigh', 'Under-breast fold', 'Body folds', 'Friction-prone areas']],
                    ['body-area-5', 'sparkles', 'Uneven Tone & Texture', ['Dark-looking areas', 'Rough texture', 'Dullness', 'Appearance-focused care']],
                    ['body-area-6', 'feather', 'Barrier & Sensitive Body Care', ['Compromised-feeling barrier', 'Sensitive areas', 'Gentle cleansing', 'Barrier-support care']],
                ],
                'experts' => [
                    'label' => 'Built on multidisciplinary expertise',
                    'items' => [
                        ['flask', 'Dermatology', 'Skin physiology & condition understanding'],
                        ['network', 'Cosmetic Science', 'Safe, effective, stable formulations'],
                        ['doc', 'Regulatory Support', 'Compliance & claims substantiation'],
                        ['gear', 'Manufacturing Excellence', 'Consistent quality from lab to production'],
                    ],
                ],
            ],
            'solutions' => [
                'title' => ['Targeted Formulations', 'for Real Body Concerns.'],
                'kicker' => 'Science-backed solutions for every area, every need.',
                'body' => ['Lunaray mengembangkan rangkaian produk specialized body care dengan formulasi yang disesuaikan untuk kebutuhan tubuh yang lebih spesifik. Dari pembersihan, perawatan, hingga perlindungan, setiap format dikembangkan berdasarkan karakteristik kulit, area penggunaan, dan tujuan perawatan.'],
                'photo' => 'body-products',
                'photoAlt' => 'Rangkaian produk specialized body care Lunaray: clarifying body cleanser, intensive body cream, targeted serum, deodorant, dan foot care',
                'script' => ['More Targeted Care.', 'More Possibilities.'],
                'cards' => [
                    ['dots', 'Body Acne-Prone Care', 'Formulasi untuk kulit tubuh yang rentan berjerawat, seperti punggung, dada, bahu, dan area lain yang mudah berjerawat.', ['Clarifying Body Cleanser', 'Acne-Prone Body Toner', 'Targeted Serum', 'Lightweight Body Lotion', 'Spot Care Gel'], null, 'Clearer Skin, Greater Confidence.', ['Back', 'Chest', 'Shoulders']],
                    ['waves', 'Very Dry & Rough Skin', 'Perawatan intensif untuk kulit tubuh yang sangat kering, kasar, dan mudah mengelupas.', ['Hydrating Body Wash', 'Rich Body Cream', 'Repair Balm', 'Urea / Ceramide Body Lotion', 'Overnight Body Treatment'], null, 'Smoother. Softer. More Comfortable.', ['Dry', 'Rough Texture', 'Flaking']],
                    ['shield', 'Odor-Prone Areas', 'Solusi untuk area tubuh yang lebih mudah mengalami bau dan keringat berlebih.', ['Deodorant Spray / Roll-On', 'Antibacterial Body Wash', 'pH-Balanced Cleanser', 'Freshening Body Mist', 'Odor-Control Lotion'], null, 'Stay Fresh. Feel Confident.', ['Underarms', 'Feet', 'Body Folds']],
                    ['waves', 'Friction & Fold Care', 'Perawatan untuk area yang rentan terhadap gesekan, lembap, dan iritasi.', ['Soothing Cleanser', 'Anti-Friction Cream', 'Calming Gel', 'Protective Balm', 'Lightweight Daily Care'], null, 'Comfort for Every Movement.', ['Inner Thigh', 'Under-Breast', 'Body Folds']],
                    ['sparkles', 'Uneven Tone & Texture', 'Formulasi untuk membantu merawat tampilan kulit yang tidak merata, kasar, atau kusam.', ['Brightening Body Cleanser', 'Exfoliating Body Scrub', 'Tone-Targeted Serum', 'Brightening Body Lotion', 'Advanced Treatment Cream'], null, 'Smoother. More Even. Brighter Looking.', ['Dark-Looking Areas', 'Rough Texture']],
                    ['feather', 'Barrier & Sensitive Body Care', 'Perawatan untuk kulit tubuh yang sensitif atau terasa lebih mudah iritasi.', ['Gentle Body Cleanser', 'Barrier Support Lotion', 'Soothing Cream', 'Microbiome-Friendly Care', 'Fragrance-Control Options'], null, 'Gentle Care. Stronger Skin Barrier.', ['Sensitive Areas', 'Compromised Barrier']],
                ],
                'experts' => [
                    'label' => 'Developed through multidisciplinary expertise',
                    'items' => [
                        ['stethoscope', 'Dermatology', 'Skin physiology & condition understanding'],
                        ['flask', 'Cosmetic Science', 'Safe, effective, stable formulations'],
                        ['network', 'Consumer Insight', 'Real needs. Real usage context.'],
                        ['doc', 'Regulatory Support', 'Compliance & claims substantiation'],
                        ['gear', 'Manufacturing Excellence', 'Consistent quality from lab to production'],
                    ],
                ],
            ],
        ];
    }
}
