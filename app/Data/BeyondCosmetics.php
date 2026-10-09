<?php

namespace App\Data;

/**
 * Content for the "Beyond Cosmetics" capabilities page (extended manufacturing
 * ecosystem: beauty-from-within, wellness, home/hygiene/car care, medical
 * devices & beauty technology, traditional/herbal, and pet care).
 *
 * Copy is transcribed from the "Beyond Cosmetics" design brief. Photo keys
 * resolve to public/assets/img/lunaray/capabilities/beyond/byd-{key}.webp.
 */
class BeyondCosmetics
{
    public static function hero(): array
    {
        return [
            'brand' => 'Lunaray',
            'brandTag' => 'Cosmetic by Science',
            'eyebrow' => 'Extended Manufacturing Ecosystem',
            'title' => ['Beyond Cosmetics.', 'More Ways', 'to Build Your Brand.'],
            'accent' => [1, 2],
            'kicker' => 'Kebutuhan sebuah brand tidak selalu berhenti pada kosmetik.',
            'body' => 'Melalui sister companies dan manufacturing partners dalam ekosistem Lunaray, kebutuhan pengembangan brand dapat dihubungkan dengan fasilitas produksi lintas kategori, sesuai kapabilitas dan perizinan masing-masing fasilitas.',
            'photo' => 'products',
            'photoAlt' => 'Rangkaian konsep produk ekosistem Lunaray: collagen drink, wellness blend, home care, medical mask, dan herbal blend',
        ];
    }

    public static function categories(): array
    {
        return [
            ['capsule', 'Beauty From Within', 'Konsep beauty dari dalam', 'beauty-from-within'],
            ['leaf', 'Wellness & Functional Products', 'Kebutuhan wellness sehari-hari', 'wellness-functional-products'],
            ['spray', 'Home, Hygiene & Car Care', 'Perbekalan Kesehatan Rumah Tangga', 'home-hygiene-car-care'],
            ['shield-plus', 'Medical Devices & Beauty Technology', 'Pengembangan alat kesehatan', 'medical-devices-beauty-technology'],
            ['sprout', 'Traditional & Herbal Products', 'Konsep produk tradisional & herbal', 'traditional-herbal-products'],
            ['paw', 'Pet Care & Animal Health', 'Perawatan, nutrisi & kesehatan hewan', 'pet-care-animal-health'],
        ];
    }

    /**
     * Full-bleed "glass panel" sections, each rendered over a scene photo that
     * already has the panel and CTA pill drawn into it. $panelBounds / $ctaBounds
     * are [top, right, bottom, left] percentages marking where that graphic sits
     * in the 1672x941 desktop photo, so the real heading/body/button can be laid
     * over it without redrawing the glass panel in CSS. $photoMobile is a tighter
     * 772x941 portrait crop (same file minus the far side of the scene) used
     * below the tablet breakpoint, with its own recalculated bounds — at that
     * width the full desktop photo would shrink the panel down to a sliver.
     */
    public static function panels(): array
    {
        return [
            [
                'id' => 'beauty-from-within',
                'photo' => 'beauty-from-within',
                'photoMobile' => 'beauty-from-within-m',
                'photoAlt' => 'Konsep produk Lunaray Beauty From Within: collagen drink, glutathione drink, slim drink, dan probiotic beauty blend',
                'panelBounds' => [6.9, 1.0, 16.2, 57.1],
                'ctaBounds' => [81.8, 4.3, 11.8, 61.6],
                'panelBoundsMobile' => [6.9, 2.2, 16.2, 7.1],
                'ctaBoundsMobile' => [81.8, 9.3, 11.8, 16.8],
                'eyebrow' => 'Extended Manufacturing Ecosystem',
                'title' => ['Beauty', 'From Within'],
                'subhead' => 'Extend Your Beauty Brand from Within.',
                'body' => [
                    'Kembangkan cerita kecantikan brand Anda melampaui perawatan kulit luar. Eksplorasi konsep beauty dari dalam dengan mempertimbangkan target konsumen, komposisi, rasa, format sajian, dan positioning brand.',
                    'Pengembangan dihubungkan dengan sister companies atau manufacturing partners yang relevan, sesuai kapabilitas dan perizinan masing-masing fasilitas.',
                ],
                'cta' => 'Diskusikan Konsep Beauty Anda',
            ],
            [
                'id' => 'wellness-functional-products',
                'photo' => 'wellness',
                'photoMobile' => 'wellness-m',
                'photoAlt' => 'Konsep produk Lunaray Wellness & Functional: fiber drink, protein & nutrition blend, functional beverage, dan superfood blend',
                'panelBounds' => [6.9, 55.4, 16.2, 0.9],
                'ctaBounds' => [81.8, 62.0, 11.8, 9.6],
                'panelBoundsMobile' => [6.9, 3.5, 16.2, 1.9],
                'ctaBoundsMobile' => [81.8, 17.7, 11.8, 20.7],
                'eyebrow' => 'Extended Manufacturing Ecosystem',
                'title' => ['Wellness', '& Functional', 'Products'],
                'subhead' => 'Develop Products for Everyday Wellness.',
                'body' => [
                    'Hadirkan konsep wellness yang relevan dengan keseharian konsumen Anda.',
                    'Eksplorasi minuman serat, protein dan nutrisi, functional beverage, hingga superfood blend—dengan pengembangan yang mempertimbangkan target konsumen, komposisi, rasa, dan format sajian.',
                    'Pengembangan dihubungkan dengan sister companies atau manufacturing partners yang relevan, sesuai kapabilitas dan perizinan masing-masing fasilitas.',
                ],
                'cta' => 'Diskusikan Konsep Wellness Anda',
            ],
            [
                'id' => 'home-hygiene-car-care',
                'photo' => 'home',
                'photoMobile' => 'home-m',
                'photoAlt' => 'Konsep produk Lunaray Home, Hygiene & Car Care: floor cleaner, dishwashing liquid, hand sanitizer, antibacterial cleaner, fabric softener, liquid detergent, car shampoo, dan interior cleaner',
                'panelBounds' => [6.9, 1.3, 14.4, 57.1],
                'ctaBounds' => [83.6, 14.4, 9.3, 60.2],
                'panelBoundsMobile' => [6.9, 2.8, 14.4, 7.1],
                'ctaBoundsMobile' => [83.6, 31.1, 9.3, 13.9],
                'eyebrow' => 'Extended Manufacturing Ecosystem',
                'title' => ['Home,', 'Hygiene &', 'Car Care'],
                'kicker' => 'PKRT & Related Manufacturing',
                'subhead' => 'Care for Every Space.',
                'body' => [
                    'Kembangkan produk untuk merawat rumah, menjaga kebersihan, dan merawat kendaraan.',
                    'Dari pembersih rumah tangga, produk hygiene dan antibakterial, hingga laundry dan car care—pengembangan disesuaikan dengan fungsi produk, target pengguna, dan format kemasan.',
                    'Pengembangan dihubungkan dengan fasilitas dalam ekosistem, sesuai kapabilitas, klasifikasi produk, dan perizinan masing-masing fasilitas.',
                ],
                'cta' => 'Diskusikan Konsep Produk Anda',
            ],
            [
                'id' => 'medical-devices-beauty-technology',
                'photo' => 'alkes',
                'photoMobile' => 'alkes-m',
                'photoAlt' => 'Konsep produk Lunaray Medical Devices & Beauty Technology: LED light therapy mask, microcurrent facial device, acne patch, wound dressing, dan condom',
                'panelBounds' => [0.5, 56.9, 27.1, 0.9],
                'ctaBounds' => [70.9, 69.4, 19.6, 5.5],
                'panelBoundsMobile' => [0.5, 6.7, 27.1, 1.9],
                'ctaBoundsMobile' => [70.9, 33.7, 19.6, 11.9],
                'eyebrow' => 'Extended Manufacturing Ecosystem',
                'title' => ['Medical Devices', '& Beauty', 'Technology'],
                'subhead' => 'Extend Your Brand. Advance the Care.',
                'body' => [
                    'Bawa brand Anda lebih jauh—dari perawatan sehari-hari menuju alat kesehatan dan teknologi kecantikan.',
                    'Eksplorasi konsep acne patch, wound dressing, kondom, hingga beauty devices. Mulai dari kebutuhan pengguna, tentukan fungsi dan spesifikasi, lalu temukan arah pengembangan yang relevan bagi brand Anda.',
                ],
                'tags' => ['Acne Patch', 'Wound Dressing', 'Condom', 'LED Mask', 'Microcurrent Device'],
                'note' => 'Pengembangan melalui fasilitas dan mitra dalam ekosistem, sesuai kapabilitas, klasifikasi, dan perizinan produk terkait.',
                'cta' => 'Diskusikan Ide Produk Anda',
            ],
            [
                'id' => 'traditional-herbal-products',
                'photo' => 'tradisional',
                'photoMobile' => 'tradisional-m',
                'photoAlt' => 'Konsep produk Lunaray Traditional & Herbal Products: herbal capsules, herbal pills, liquid herbal, dan herbal honey',
                'panelBounds' => [6.9, 1.3, 23.9, 57.1],
                'ctaBounds' => [74.1, 15.5, 18.0, 59.8],
                'panelBoundsMobile' => [6.9, 2.8, 23.9, 7.1],
                'ctaBoundsMobile' => [74.1, 33.5, 18.0, 13.0],
                'eyebrow' => 'Extended Manufacturing Ecosystem',
                'title' => ['Traditional &', 'Herbal Products'],
                'subhead' => 'Rooted in Nature. Developed with Purpose.',
                'body' => [
                    'Wujudkan potensi herbal menjadi produk yang punya tempat dalam kehidupan konsumen masa kini.',
                    'Berangkat dari kebutuhan konsumen, eksplorasi bahan dan bentuk sediaan yang tepat—dari kapsul, pil, herbal cair, hingga madu. Bangun konsep produk dengan fungsi yang jelas, pengalaman konsumsi yang dipikirkan, dan karakter brand yang kuat.',
                ],
                'tags' => ['Herbal Capsules', 'Herbal Pills', 'Liquid Herbal', 'Herbal Honey'],
                'note' => 'Pengembangan melalui fasilitas dan mitra dalam ekosistem, sesuai kapabilitas, klasifikasi, dan lingkup perizinan produk terkait.',
                'cta' => 'Wujudkan Konsep Herbal Brand Anda',
            ],
            [
                'id' => 'pet-care-animal-health',
                'photo' => 'pet',
                'photoMobile' => 'pet-m',
                'photoAlt' => 'Konsep produk Lunaray Pet Care & Animal Health: pet shampoo, animal supplement, veterinary products, dog food, cat food, dan bird feed',
                'panelBounds' => [0.5, 56.9, 22.3, 0.9],
                'ctaBounds' => [75.7, 68.8, 16.4, 5.5],
                'panelBoundsMobile' => [0.5, 6.7, 22.3, 1.9],
                'ctaBoundsMobile' => [75.7, 32.4, 16.4, 11.9],
                'eyebrow' => 'Extended Manufacturing Ecosystem',
                'title' => ['Pet Care', '& Animal Health'],
                'subhead' => 'Build Your Brand Around Better Care.',
                'body' => [
                    'Hadirkan brand Anda dalam setiap kebutuhan perawatan hewan—dari kebersihan dan nutrisi sehari-hari hingga kesehatan.',
                    'Kembangkan produk untuk anjing, kucing, dan burung dengan berangkat dari kebutuhan tiap spesies serta kemudahan bagi pemiliknya. Eksplorasi shampoo dan grooming, vitamin dan suplemen, produk veteriner, hingga pakan dengan fungsi yang jelas dan karakter brand yang kuat.',
                ],
                'tags' => ['Grooming & Hygiene', 'Vitamins & Supplements', 'Veterinary Products', 'Pet Food & Nutrition'],
                'note' => 'Pengembangan melalui fasilitas dan mitra dalam ekosistem, sesuai kapabilitas, klasifikasi, dan lingkup perizinan produk terkait.',
                'cta' => 'Wujudkan Konsep Pet Care Brand Anda',
            ],
        ];
    }

    /**
     * Final full-bleed banner ("One Development Ecosystem"): the headline,
     * subhead and CTA sit in a gap the photo already leaves empty above its
     * drawn pill; the category labels under each product cluster and the
     * corner taglines are baked into the photo itself, so only the longer
     * supporting copy needs a plain block underneath.
     */
    public static function finalBanner(): array
    {
        return [
            'photo' => 'one-development',
            'photoAlt' => 'Ekosistem produk Lunaray: marine collagen drink, nutrition blend, home care, laundry care, LED light therapy mask, microcurrent device, acne patch, herbal honey, herbal capsules, pet shampoo, dan pet food',
            'contentBounds' => [6.4, 18.1, 68.1, 17.9],
            'ctaBounds' => [32.4, 36.6, 61.7, 36.8],
            'title' => ['One Development Ecosystem.', 'More Ways to Build.'],
            'subhead' => 'Bawa visi brand Anda lebih jauh.',
            'cta' => 'Diskusikan Langkah Berikutnya untuk Brand Anda',
            'body' => [
                'Setiap kebutuhan konsumen membuka peluang pengembangan baru. Perluas jangkauan brand Anda melalui kategori produk yang relevan, dengan arah yang jelas dan alasan yang kuat untuk hadir.',
                'Mulai dari masalah yang ingin Anda jawab. Bersama Lunaray, eksplorasi konsep produk dan temukan fasilitas serta mitra dalam ekosistem yang sesuai untuk mengembangkannya.',
            ],
            'note' => 'Pengembangan disesuaikan dengan kapabilitas, klasifikasi, dan lingkup perizinan fasilitas terkait.',
        ];
    }

    public static function closing(): array
    {
        return [
            'tagline' => ['Different People.', 'Different Body Stories.', 'A More Meaningful Solution.'],
            'stats' => [
                ['flask', 'Science', 'Driven'],
                ['gear', 'Flexible', 'Development'],
                ['users', 'Consumer', 'Focused'],
                ['globe', 'Real', 'Impact'],
            ],
            'cta' => 'Explore the Ecosystem',
        ];
    }
}
