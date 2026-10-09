<?php

namespace App\Data;

/**
 * Content for the Regular Capabilities page (8 product categories).
 *
 * Copy is transcribed from the "dummy web lunaray CAPABILITIES" design PDF. Image keys
 * resolve to public/assets/img/lunaray/capabilities/cap-{key}.webp, all cropped from
 * that PDF's flattened raster so photography matches the approved design exactly.
 *
 * Each category has an optional "need" block (consumer need + photo + needs grid) and a
 * "format" block (product photo + either the formats/texture/solutions panels or a row
 * of image cards). Titles are line arrays; `accent` is the index rendered in salmon.
 */
class RegularCapabilities
{
    public static function pillars(): array
    {
        return [
            ['icon' => 'flask', 'title' => 'Science-Backed Development', 'desc' => 'From concept to formulation'],
            ['icon' => 'gear', 'title' => 'Flexible Manufacturing', 'desc' => 'OEM · ODM · OBM · IPM'],
            ['icon' => 'users', 'title' => 'Expert Collaboration', 'desc' => 'Scientists · Dermatologists · Formulators'],
            ['icon' => 'shield', 'title' => 'Quality & Regulatory Compliance', 'desc' => 'For local and global markets'],
            ['icon' => 'feather', 'title' => 'Sustainable & Responsible Manufacturing', 'desc' => 'A better future for people and the planet'],
        ];
    }

    public static function categories(): array
    {
        return [
            self::skincare(),
            self::bodyCare(),
            self::hairCare(),
            self::mensCare(),
            self::babyKids(),
            self::personalCare(),
            self::fragrance(),
            self::decorative(),
        ];
    }

    private static function skincare(): array
    {
        return [
            'id' => 'skincare',
            'name' => 'Skincare',
            'arch' => 'arch-skincare',
            'archItems' => ['Serum', 'Cream', 'Cleanser', 'Toner'],
            'need' => [
                'eyebrow' => 'Skincare Development',
                'title' => ['Start with', 'the Skin Need.'],
                'kicker' => 'Better skin begins with a deeper understanding.',
                'body' => [
                    'Skincare tidak selalu harus dimulai dari bentuk produk seperti serum atau cream. Di Lunaray, setiap pengembangan skincare berangkat dari pemahaman mendalam tentang kebutuhan kulit konsumen, lifestyle, dan tujuan formulasi, sehingga menghasilkan solusi yang lebih relevan, efektif, dan siap diproduksi secara stabil.',
                ],
                'photo' => 'skin-model',
                'photoAlt' => 'Model skincare dengan kulit wajah sehat dan terhidrasi',
                'needsLabel' => 'A wide range of skin needs we help address',
                'needs' => [
                    ['drop', 'Hydration', 'Untuk kulit yang lebih terhidrasi.'],
                    ['honeycomb', 'Barrier Support', 'Untuk kulit yang lebih kuat dan sehat.'],
                    ['sparkles', 'Brightening', 'Untuk tampilan kulit yang lebih cerah merata.'],
                    ['dots', 'Acne-Prone Skin', 'Untuk kulit yang rentan berjerawat.'],
                    ['leaf', 'Sensitive Skin', 'Untuk kulit yang lebih tenang dan nyaman.'],
                    ['droplets', 'Oil Control', 'Untuk membantu mengontrol minyak berlebih.'],
                    ['halfmoon', 'Uneven Tone', 'Untuk tampilan kulit yang lebih merata.'],
                    ['hourglass', 'Age-Focused Care', 'Untuk kulit yang tetap sehat dan tampak muda.'],
                ],
                'cta' => [
                    'lines' => ['Different skin stories.', 'A more meaningful solution.'],
                    'aside' => ['Science guided.', 'People focused.', 'A brighter tomorrow.'],
                    'button' => 'Discuss Your Skincare Idea',
                ],
            ],
            'format' => [
                'eyebrow' => 'From Skin Need to Product Format',
                'title' => ['From Skin Need', 'to Product Format.'],
                'kicker' => 'Different skin needs. Different formats. Different experiences.',
                'body' => [
                    'Lunaray mengembangkan berbagai format skincare dengan tekstur, sensorial, dan performa yang disesuaikan dengan kebutuhan kulit, target konsumen, dan tujuan formulasi.',
                ],
                'photo' => 'skin-products',
                'photoAlt' => 'Rangkaian produk skincare Lunaray: toner, essence, serum, dan cream',
                'layout' => 'panels',
                'formats' => [
                    'label' => 'Product Formats',
                    'sub' => 'Wide range of skincare formats to match your concept and consumer needs.',
                    'items' => [
                        ['skin-fmt-cleanser', 'Cleanser'], ['skin-fmt-toner', 'Toner'], ['skin-fmt-essence', 'Essence'],
                        ['skin-fmt-serum', 'Serum'], ['skin-fmt-ampoule', 'Ampoule'], ['skin-fmt-moisturizer', 'Moisturizer'],
                        ['skin-fmt-cream', 'Cream'], ['skin-fmt-gel', 'Gel'], ['skin-fmt-lotion', 'Lotion'],
                        ['skin-fmt-face-mist', 'Face Mist'], ['skin-fmt-mask', 'Mask'], ['skin-fmt-eye-care', 'Eye Care'],
                        ['skin-fmt-lip-care', 'Lip Care'], ['skin-fmt-sunscreen', 'Sunscreen'],
                    ],
                ],
                'texture' => [
                    'label' => 'Texture & Sensorial',
                    'sub' => 'Texture defines how a product feels, performs, and fits into a consumer’s daily routine.',
                    'items' => [
                        ['skin-tex-lightweight-gel', 'Lightweight Gel'], ['skin-tex-watery', 'Watery Texture'],
                        ['skin-tex-silky-emulsion', 'Silky Emulsion'], ['skin-tex-rich-cream', 'Rich Cream'],
                    ],
                    'sliders' => [
                        ['Lightweight', 'Rich', 92], ['Matte Finish', 'Dewy Finish', 54],
                        ['Fast Absorbing', 'Rich After-Feel', 88], ['Silky Touch', 'Smooth Spreadability', 38],
                    ],
                ],
                'third' => [
                    'type' => 'photos',
                    'label' => 'Supporting Formats',
                    'sub' => 'Additional skincare formats to bring more possibilities to your product line.',
                    'items' => [
                        ['skin-sup-spot-care', 'Spot Care'], ['skin-sup-balm', 'Balm'],
                        ['skin-sup-sleeping-mask', 'Sleeping Mask'], ['skin-sup-powder', 'Powder / Solid Format'],
                    ],
                ],
                'cta' => [
                    'lines' => ['Different people.', 'Different skin stories.', 'A more meaningful solution.'],
                    'headline' => 'Let’s Develop Skincare Solutions That Truly Fit Your Consumers.',
                    'button' => 'Let’s Discuss Your Skincare Idea',
                ],
            ],
        ];
    }

    private static function bodyCare(): array
    {
        return [
            'id' => 'body-care',
            'name' => 'Body Care',
            'arch' => 'arch-bodycare',
            'archItems' => ['Body Lotion', 'Body Wash', 'Body Serum'],
            'need' => [
                'eyebrow' => 'Body Care Development',
                'title' => ['Body Skin', 'Has Its Own Needs.'],
                'kicker' => 'Different areas. Different lifestyles. Different needs.',
                'body' => [
                    'Kulit tubuh memiliki karakter dan kebutuhan yang berbeda dari kulit wajah. Di Lunaray, kami mengembangkan body care berdasarkan pemahaman mendalam tentang area penggunaan, kebutuhan kulit, kebiasaan sehari-hari, lingkungan, serta pengalaman produk yang ingin dibangun untuk konsumennya.',
                ],
                'photo' => 'body-model',
                'photoAlt' => 'Model mengaplikasikan body lotion pada bahu',
                'photoSide' => 'left',
                'needsLabel' => 'A wide range of body skin needs we help address',
                'needs' => [
                    ['drop', 'Hydration & Moisture', 'Untuk kulit tubuh yang lebih terhidrasi dan terasa lembut.'],
                    ['honeycomb', 'Barrier Support', 'Untuk menjaga kelembapan alami kulit dan merawat skin barrier.'],
                    ['waves', 'Dry & Rough Skin', 'Untuk kulit yang terasa kering, kasar, dan kurang halus.'],
                    ['sparkles', 'Uneven Tone & Texture', 'Untuk tampilan kulit tubuh yang lebih merata, halus, dan bercahaya.'],
                    ['dots', 'Body Acne-Prone Skin', 'Untuk kulit yang rentan berjerawat atau memiliki tekstur tidak merata.'],
                    ['leaf', 'Sensitive Body Skin', 'Untuk kulit tubuh yang lebih tenang, nyaman, dan tidak mudah iritasi.'],
                    ['shield', 'Odor & Freshness', 'Untuk rasa segar dan percaya diri sepanjang hari.'],
                    ['waves', 'Firmness & Elasticity Appearance', 'Untuk kulit tubuh yang terasa lebih kencang, halus, dan sehat.'],
                ],
                'cta' => [
                    'lines' => ['Different people.', 'Different body stories.', 'A more meaningful solution.'],
                    'headline' => 'Let’s Create A Better Body Care Tomorrow.',
                    'button' => 'Discuss Your Body Care Idea',
                ],
            ],
            'format' => [
                'eyebrow' => 'Body Care Development',
                'title' => ['From Body Need', 'to Product Experience.'],
                'kicker' => 'Different needs. Different formats. Different experiences.',
                'body' => [
                    'Lunaray mengembangkan berbagai format body care dengan tekstur, sensorial, dan performa yang disesuaikan dengan kebutuhan kulit, target konsumen, dan tujuan formulasi, sehingga setiap produk tidak hanya merawat, tetapi juga memberikan pengalaman yang bermakna.',
                ],
                'photo' => 'body-products',
                'photoAlt' => 'Rangkaian produk body care Lunaray: body wash, lotion, serum, dan body scrub',
                'layout' => 'panels',
                'formats' => [
                    'label' => 'Product Formats',
                    'sub' => 'Wide range of body care formats to match your concept and consumer needs.',
                    'items' => [
                        ['body-fmt-body-wash', 'Body Wash'], ['body-fmt-shower-gel', 'Shower Gel'], ['body-fmt-body-cleanser', 'Body Cleanser'],
                        ['body-fmt-body-scrub', 'Body Scrub'], ['body-fmt-body-lotion', 'Body Lotion'], ['body-fmt-body-cream', 'Body Cream'],
                        ['body-fmt-body-butter', 'Body Butter'], ['body-fmt-body-serum', 'Body Serum'], ['body-fmt-body-oil', 'Body Oil'],
                        ['body-fmt-body-balm', 'Body Balm'], ['body-fmt-body-mist', 'Body Mist'], ['body-fmt-body-gel', 'Body Gel'],
                    ],
                ],
                'texture' => [
                    'label' => 'Texture & Sensorial',
                    'sub' => 'Different textures, different experiences.',
                    'items' => [
                        ['body-tex-light-lotion', 'Light Lotion'], ['body-tex-silky-serum', 'Silky Serum'], ['body-tex-rich-cream', 'Rich Cream'],
                        ['body-tex-body-butter', 'Body Butter'], ['body-tex-gel', 'Gel Texture'], ['body-tex-scrub', 'Scrub Texture'],
                    ],
                    'sliders' => [
                        ['Lightweight', 'Rich', 60], ['Fast Absorbing', 'Dewy Finish', 40],
                        ['Non-Sticky', 'Long-Lasting', 60], ['Silky Touch', 'Smooth Spreadability', 40],
                    ],
                ],
                'third' => [
                    'type' => 'solutions',
                    'label' => 'Key Solution Areas',
                    'sub' => 'Body care solutions for diverse needs and lifestyles.',
                    'items' => [
                        ['drop', 'Cleansing & Purifying', 'For clean, refreshed skin.'],
                        ['shield', 'Barrier Support', 'To help maintain healthy skin barrier.'],
                        ['honeycomb', 'Moisturizing & Nourishing', 'For soft, smooth, healthy skin.'],
                        ['dots', 'Body Acne-Prone Care', 'For clearer, healthier skin.'],
                        ['sparkles', 'Brightening & Tone Care', 'For a more even and radiant look.'],
                        ['leaf', 'Sensitive Body Skin', 'Gentle care for delicate skin.'],
                        ['waves', 'Texture & Smoothing', 'For softer, smoother skin.'],
                        ['sun', 'Sun & Outdoor Care', 'Protection for every adventure.'],
                        ['wind', 'Freshness & Odor Care', 'For all day confidence.'],
                        ['crosshair', 'Targeted Body Care', 'Solutions for specific areas and needs.'],
                    ],
                ],
                'cta' => [
                    'lines' => ['Different people.', 'Different body stories.', 'A more meaningful solution.'],
                    'pillars' => [['flask', 'Science Driven'], ['gear', 'Flexible Development'], ['users', 'Consumer Focused'], ['globe', 'Real Impact']],
                    'button' => 'Let’s Develop Your Body Care Idea',
                ],
            ],
        ];
    }

    private static function hairCare(): array
    {
        return [
            'id' => 'hair-care',
            'name' => 'Hair Care',
            'arch' => 'arch-haircare',
            'archItems' => ['Shampoo', 'Conditioner', 'Scalp Care'],
            'need' => [
                'eyebrow' => 'Hair & Scalp Care Development',
                'title' => ['Hair Care Starts', 'with Scalp & Hair Needs.'],
                'kicker' => 'Different scalp. Different hair. Different needs.',
                'body' => [
                    'Kami mengembangkan produk hair & scalp care dengan memahami kebutuhan kulit kepala, karakter dan kondisi rambut, kebiasaan styling, serta lifestyle konsumen. Pemahaman tersebut membantu menentukan arah produk, format, sensorial, dan pendekatan formulasi yang relevan.',
                ],
                'photo' => 'hair-model',
                'photoAlt' => 'Model dengan rambut panjang bergelombang yang sehat',
                'photoSide' => 'left',
                'needsLabel' => 'Scalp & Hair Needs',
                'needsSub' => 'A wide range of concerns and goals for different scalp and hair conditions.',
                'needs' => [
                    ['drop', 'Scalp Oiliness', 'For a balanced, refreshed scalp.'],
                    ['dots', 'Dry & Flaky Scalp', 'To reduce flakes and relieve dryness.'],
                    ['leaf', 'Sensitive Scalp', 'For a calmer, more comfortable scalp.'],
                    ['strand', 'Hair Fall & Thinning Concerns', 'To help maintain stronger, fuller-looking hair.'],
                    ['zap', 'Dry & Damaged Hair', 'To nourish and restore hair.'],
                    ['waves', 'Frizz & Manageability', 'For smoother, more manageable hair.'],
                    ['sparkles', 'Hair & Scalp Balance', 'For overall scalp and hair well-being.'],
                    ['rings', 'Treated / Colored Hair', 'To care for hair after chemical treatments.'],
                ],
                'extra' => [
                    'type' => 'swatches',
                    'label' => 'Hair & Scalp Types',
                    'sub' => 'Different hair and scalp characteristics require different solutions.',
                    'items' => [
                        ['hair-type-straight', 'Straight'], ['hair-type-wavy', 'Wavy'], ['hair-type-curly', 'Curly'], ['hair-type-coily', 'Coily'],
                        ['hair-type-fine', 'Fine'], ['hair-type-medium', 'Medium'], ['hair-type-thick', 'Thick'], ['hair-type-treated', 'Treated / Colored'],
                    ],
                ],
                'cta' => [
                    'lines' => ['Different people.', 'Different hair stories.', 'A more meaningful solution.'],
                    'pillars' => [['flask', 'Science Driven'], ['leaf', 'Safe & Gentle'], ['strand', 'Real Performance'], ['users', 'For Every Hair Journey']],
                    'button' => 'Explore Hair Care Possibilities',
                    'toFormats' => true,
                ],
            ],
            'format' => [
                'eyebrow' => 'Hair & Scalp Care Development',
                'title' => ['From Scalp & Hair Need', 'to Product Experience.'],
                'kicker' => 'Wide formats. Advanced textures. Real solutions.',
                'body' => [
                    'Lunaray mengembangkan berbagai format hair & scalp care dengan mempertimbangkan kebutuhan konsumen, karakter rambut, area penggunaan, sensorial, serta pengalaman pemakaian yang ingin dibangun. Didukung pendekatan berbasis sains, formulasi kami dirancang untuk menghasilkan produk yang relevan, aman, dan bernilai bagi konsumen.',
                ],
                'photo' => 'hair-products',
                'photoAlt' => 'Rangkaian produk hair care Lunaray: shampoo, conditioner, scalp serum, dan hair mask',
                'layout' => 'panels',
                'formats' => [
                    'label' => 'Product Formats',
                    'sub' => 'Flexible formats to match different hair & scalp needs.',
                    'items' => [
                        ['hair-fmt-shampoo', 'Shampoo'], ['hair-fmt-scalp-cleanser', 'Scalp Cleanser'], ['hair-fmt-conditioner', 'Conditioner'],
                        ['hair-fmt-hair-mask', 'Hair Mask'], ['hair-fmt-scalp-serum', 'Scalp Serum'], ['hair-fmt-hair-tonic', 'Hair Tonic'],
                        ['hair-fmt-hair-serum', 'Hair Serum'], ['hair-fmt-leave-in', 'Leave-In Conditioner'], ['hair-fmt-hair-oil', 'Hair Oil'],
                        ['hair-fmt-hair-mist', 'Hair Mist'], ['hair-fmt-styling-cream', 'Styling Cream'], ['hair-fmt-scalp-treatment', 'Scalp Treatment Format'],
                    ],
                ],
                'texture' => [
                    'label' => 'Texture & Sensorial',
                    'sub' => 'Different textures. Different hair experiences.',
                    'items' => [
                        ['hair-tex-clear-gel', 'Clear Gel'], ['hair-tex-light-cream', 'Light Cream'], ['hair-tex-rich-cream', 'Rich Cream'],
                        ['hair-tex-watery-tonic', 'Watery Tonic'], ['hair-tex-silky-serum', 'Silky Serum'], ['hair-tex-rich-mask', 'Rich Mask'],
                    ],
                    'sliders' => [
                        ['Lightweight', 'Rich', 62], ['Fast Absorbing', 'Nourishing', 28],
                        ['Non-Greasy', 'Long-Lasting', 58], ['Smooth Finish', 'Luxe Sensorial', 62],
                    ],
                ],
                'third' => [
                    'type' => 'solutions',
                    'label' => 'Key Solution Areas',
                    'sub' => 'Science-backed solutions for diverse hair & scalp needs.',
                    'items' => [
                        ['drop', 'Scalp Cleansing & Balance', 'For a clean, fresh, and healthy scalp.'],
                        ['waves', 'Frizz Control & Manageability', 'For smoother, more disciplined hair.'],
                        ['honeycomb', 'Nourishing & Conditioning', 'For softer, smoother, more manageable hair.'],
                        ['shield', 'Color Protection', 'To help maintain vibrant, long-lasting color.'],
                        ['strand', 'Hair Fall & Scalp Support', 'Formulated to support stronger, fuller-looking hair.'],
                        ['leaf', 'Scalp Comfort', 'For sensitive, dry, or irritated scalps.'],
                        ['sparkles', 'Damage Repair', 'For dry, damaged, and chemically treated hair.'],
                        ['sun', 'Styling & Finishing', 'For shape, hold, and everyday confidence.'],
                    ],
                ],
                'cta' => [
                    'lines' => ['Different people.', 'Different hair stories.', 'A more meaningful solution.'],
                    'aside' => ['Your idea.', 'Our science.', 'Real products.', 'Real impact.'],
                    'button' => 'Let’s Develop Your Hair Care Idea',
                ],
            ],
        ];
    }

    private static function mensCare(): array
    {
        return [
            'id' => 'mens-care',
            'name' => 'Men’s Care',
            'theme' => 'dark',
            'arch' => 'arch-menscare',
            'archItems' => ['Face', 'Body', 'Hair', 'Grooming'],
            'need' => [
                'eyebrow' => 'Men’s Care Development',
                'title' => ['Men’s Care.', 'More Than Grooming.'],
                'kicker' => 'Different routines. Different needs. Different product directions.',
                'body' => [
                    'Kami mengembangkan rangkaian men’s care yang disesuaikan dengan kebutuhan pria modern. Rutinitas, aktivitas, kondisi kulit dan rambut, kebiasaan bercukur, hingga preferensi penggunaan ikut membentuk kebutuhan yang berbeda. Dengan pendekatan berbasis sains, Lunaray membantu brand menentukan arah produk, format, dan formulasi yang relevan.',
                ],
                'photo' => 'men-model',
                'photoAlt' => 'Model pria dengan handuk setelah rutinitas grooming',
                'needsLabel' => 'Men’s Care Needs',
                'needsSub' => 'Key areas of concern and goals for men’s skin, hair, and body care.',
                'needs' => [
                    ['smile', 'Face & Skin Care', 'Clean, balanced, clearer-looking skin.'],
                    ['razor', 'Shaving & Grooming', 'Comfortable shave, less irritation.'],
                    ['user', 'Body Care', 'Clean, fresh, well-cared skin.'],
                    ['shield', 'Odor & Freshness', 'Stay fresh with confidence.'],
                    ['strand', 'Hair Care', 'Clean, strong, well-styled hair.'],
                    ['dots', 'Scalp Care', 'Balanced, comfortable scalp environment.'],
                    ['activity', 'Active & Outdoor', 'Protection for an active lifestyle.'],
                    ['clock', 'Simple Daily Routines', 'Practical, effective, easy to maintain.'],
                ],
                'extra' => [
                    'type' => 'contexts',
                    'label' => 'Different Contexts. Different Needs.',
                    'sub' => 'Men’s lifestyles and daily activities influence their personal care needs.',
                    'items' => [
                        ['men-ctx-active', 'Active & Sporty', 'Sweat more. Need longer freshness.'],
                        ['men-ctx-professional', 'Professional', 'Look sharp. Feel confident all day.'],
                        ['men-ctx-urban', 'Urban Lifestyle', 'Face daily challenges. Stay fresh.'],
                        ['men-ctx-grooming', 'Grooming Routine', 'Smooth shave. Healthier-looking skin.'],
                        ['men-ctx-outdoor', 'Outdoor Enthusiast', 'Protection for every adventure.'],
                    ],
                ],
                'cta' => [
                    'lines' => ['Different men.', 'Different routines.', 'A more confident you.'],
                    'pillars' => [['flask', 'Science Driven'], ['shield', 'Safe & Gentle'], ['leaf', 'Consumer Centric'], ['users', 'Real Impact']],
                    'button' => 'Explore Men’s Care Possibilities',
                    'toFormats' => true,
                ],
            ],
            'format' => [
                'eyebrow' => 'Men’s Care Development',
                'title' => ['From Men’s Needs', 'to Product Experience.'],
                'kicker' => 'Real solutions. Real routines. Real impact.',
                'body' => [
                    'Lunaray mengembangkan berbagai produk men’s care yang disesuaikan dengan kebutuhan pria modern, dengan formulasi yang efektif, aman, dan nyaman digunakan — dari kebersihan hingga perawatan kulit, rambut, dan tubuh, dalam berbagai format yang relevan untuk rutinitas sehari-hari.',
                ],
                'photo' => 'men-products',
                'photoAlt' => 'Rangkaian produk men’s care Lunaray: face cleanser, body wash, moisturizer, dan hair clay',
                'layout' => 'panels',
                'formats' => [
                    'label' => 'Product Formats',
                    'sub' => 'Flexible formats to match different routines and markets.',
                    'items' => [
                        ['men-fmt-cleanser', 'Cleanser'], ['men-fmt-gel-foam', 'Gel / Foam'], ['men-fmt-toner', 'Toner'],
                        ['men-fmt-serum', 'Serum'], ['men-fmt-lotion-cream', 'Lotion / Cream'], ['men-fmt-spray', 'Spray'],
                        ['men-fmt-stick', 'Stick / Roll On'], ['men-fmt-pomade', 'Pomade / Clay'], ['men-fmt-oil', 'Oil'],
                        ['men-fmt-multi-use', 'Multi-Use'],
                    ],
                ],
                'texture' => [
                    'label' => 'Texture & Usage Experience',
                    'sub' => 'Different textures. Different sensations. Different moments.',
                    'items' => [
                        ['men-tex-clear-gel', 'Clear Gel', 'Fresh & Purifying'], ['men-tex-rich-foam', 'Rich Foam', 'Deep Cleanse'],
                        ['men-tex-light-lotion', 'Light Lotion', 'Fast Absorbing'], ['men-tex-cooling-gel', 'Cooling Gel', 'Instant Refresh'],
                        ['men-tex-cream', 'Cream', 'Nourishing'], ['men-tex-matte-clay', 'Matte Clay', 'Natural Finish'],
                    ],
                    'sliders' => [
                        ['Lightweight', 'Rich', 70], ['Fast Absorbing', 'Nourishing', 42],
                        ['Non-Greasy', 'Natural Finish', 42], ['Long-Lasting', 'Strong Hold', 53],
                    ],
                ],
                'third' => [
                    'type' => 'solutions',
                    'label' => 'Key Solution Areas',
                    'sub' => 'Science-backed solutions for men’s real needs.',
                    'items' => [
                        ['drop', 'Facial Care', 'Cleanse, protect, and maintain healthy-looking skin.'],
                        ['shield', 'Odor & Freshness', 'Stay fresh and confident all day.'],
                        ['razor', 'Shaving & Grooming', 'Smooth shave and post-shave comfort.'],
                        ['sun', 'Active & Outdoor Care', 'Protection for active lifestyles and outdoor exposure.'],
                        ['dumbbell', 'Body Care', 'Fresh, clean, and well-cared skin.'],
                        ['clock', 'Simple Daily Routines', 'Practical, effective, and easy to maintain.'],
                        ['leaf', 'Hair & Scalp Care', 'Stronger, cleaner, and more manageable hair.'],
                        ['network', 'Specialized Formulation', 'Tailored solutions for specific men’s care needs.'],
                    ],
                ],
                'cta' => [
                    'lines' => ['Different men.', 'Different routines.', 'A more confident you.'],
                    'aside' => ['Real science.', 'Real products.', 'Real men.', 'A better you.'],
                    'button' => 'Let’s Develop Your Men’s Care Solution',
                ],
            ],
        ];
    }

    private static function babyKids(): array
    {
        return [
            'id' => 'baby-kids',
            'name' => 'Baby & Kids Care',
            'theme' => 'sky',
            'arch' => 'arch-babykids',
            'archItems' => ['Gentle Cleansing', 'Skin', 'Hair', 'Daily Care'],
            'need' => [
                'eyebrow' => 'Baby & Kids Care Development',
                'title' => ['Gentle Care', 'for Bright Tomorrows.'],
                'kicker' => 'Safe. Gentle. Science-backed.',
                'body' => [
                    'Kami mengembangkan rangkaian baby & kids care yang diformulasikan secara ilmiah untuk mendukung kesehatan kulit dan rambut si kecil — dengan perhatian pada keamanan, kelembutan, dan kenyamanan, di setiap tahap pertumbuhan mereka.',
                ],
                'photo' => 'baby-family',
                'photoAlt' => 'Ibu bersama bayi dan anak dengan handuk lembut setelah mandi',
                'needsLabel' => 'Baby & Kids Care Needs',
                'needsSub' => 'Specific concerns and goals at every stage of their growth.',
                'needs' => [
                    ['baby', 'Gentle Cleansing', 'Mild yet effective cleansing for delicate skin.'],
                    ['shield', 'Skin Protection & Moisture', 'Help maintain healthy skin barrier and hydration.'],
                    ['strand', 'Hair & Scalp Care', 'Gentle care for healthy hair and scalp.'],
                    ['diaper', 'Diaper Area Care', 'Soothing and protective care for sensitive areas.'],
                    ['leaf', 'Sensitive Skin Care', 'Formulated for delicate and sensitive-feeling skin.'],
                    ['sun', 'Active & Outdoor', 'Protection and care for an active, exploring lifestyle.'],
                    ['users', 'Age-Appropriate Care', 'Tailored formulas for every stage, from baby to growing kids.'],
                    ['heart', 'Safe & Gentle Formulations', 'Developed with safety, science, and care in mind.'],
                ],
                'cta' => [
                    'lines' => ['Science supports', 'their brighter tomorrows.'],
                    'pillars' => [['flask', 'Science Driven'], ['shield', 'Safe & Gentle'], ['leaf', 'Consumer Centric'], ['users', 'Real Impact']],
                    'button' => 'Explore Baby & Kids Care Possibilities',
                    'toFormats' => true,
                ],
            ],
            'format' => [
                'eyebrow' => 'Baby & Kids Care',
                'title' => ['Gentle Formats.', 'Thoughtful Care', 'for Every Stage.'],
                'kicker' => 'A wide range of baby & kids care products, built around your brand vision.',
                'body' => [
                    'Lunaray membantu brand mengembangkan berbagai produk baby & kids care dengan mempertimbangkan usia pengguna, area pemakaian, kebutuhan kulit dan rambut, kenyamanan penggunaan, serta konteks pemakaian sehari-hari.',
                    'Pilihan produk dapat dikembangkan dalam berbagai format, mulai dari cleansing, moisturizing, hair & scalp care, diaper-area care, hingga personal care untuk anak, sesuai konsep brand, target konsumen, dan kebutuhan formulasi proyek.',
                ],
                'photo' => 'baby-child',
                'photoAlt' => 'Anak tersenyum bersama boneka beruang dan produk baby care',
                'layout' => 'cards',
                'cards' => [
                    ['baby-card-cleansing', 'Gentle Cleansing', ['Baby Wash', 'Hair & Body Wash', 'Gentle Cleanser', 'Foaming Cleanser', 'Kids Body Wash'], 'Cleanse with care'],
                    ['baby-card-moisturizing', 'Moisturizing & Daily Care', ['Baby Lotion', 'Baby Cream', 'Baby Oil', 'Baby Balm', 'Kids Moisturizer'], 'Soft skin, happy days'],
                    ['baby-card-hair', 'Hair & Scalp Care', ['Baby Shampoo', 'Kids Shampoo', 'Gentle Conditioner', 'Scalp Care', 'Detangling Care'], 'Healthy hair, happy kids'],
                    ['baby-card-diaper', 'Diaper & Special Area Care', ['Diaper Cream', 'Barrier Balm', 'Soothing Care', 'Targeted Area Care', 'and more.'], 'Extra protection'],
                    ['baby-card-outdoor', 'Outdoor & Active Care', ['Outdoor Care', 'After-Outdoor Care', 'Kids Body Mist', 'Active Kids Care', 'and more.'], 'Ready for adventures'],
                    ['baby-card-personal', 'Kids Personal Care', ['Kids Deodorant', 'Gentle Hygiene Products', 'Oral Care', 'Age-Appropriate Daily Care', 'and more.'], 'Small habits, big confidence'],
                ],
                'cta' => [
                    'lines' => ['Different people.', 'Different stories.', 'A brighter tomorrow.'],
                    'headline' => 'From Baby Essentials to Growing Kids. More Ways to Build Gentle Care.',
                    'button' => 'Discuss Your Idea',
                ],
            ],
        ];
    }

    private static function personalCare(): array
    {
        return [
            'id' => 'personal-care',
            'name' => 'Personal Care',
            'arch' => 'arch-personalcare',
            'archItems' => ['Hygiene', 'Deodorant', 'Oral', 'Feminine'],
            'need' => [
                'eyebrow' => 'Personal Care',
                'title' => ['Everyday Care.', 'Made More Personal.'],
                'kicker' => 'Personal care starts with real daily needs.',
                'body' => [
                    'Lunaray membantu brand mengembangkan produk personal care dan hygiene untuk berbagai kebutuhan perawatan sehari-hari, mulai dari kebersihan tubuh, pengendalian bau badan, perawatan tangan dan kaki, hingga kebutuhan personal hygiene lainnya.',
                    'Pengembangan produk dapat disesuaikan dengan target konsumen, area penggunaan, kebiasaan sehari-hari, format produk, sensorial, serta pengalaman penggunaan yang ingin dibangun oleh brand.',
                ],
                'photo' => 'personal-model',
                'photoAlt' => 'Model dengan bathrobe putih dalam rutinitas personal care pagi hari',
                'needsStyle' => 'photoCards',
                'needs' => [
                    ['personal-need-clean', 'leaf', 'Clean & Fresh', 'Daily Hygiene, Everyday Confidence', 'Produk yang mendukung kebersihan dan kesegaran dalam rutinitas harian.', 'Feel cleaner everyday'],
                    ['personal-need-odor', 'wind', 'Odor Control', 'Freshness & Confidence', 'Solusi untuk membantu mengontrol bau badan dan menjaga rasa percaya diri sepanjang hari.', 'Stay fresh, stay you'],
                    ['personal-need-oral', 'tooth', 'Oral Care', 'A Healthier Smile, A Fresher You', 'Dukungan untuk kebersihan mulut dan napas yang lebih segar setiap hari.', 'Fresh smiles ahead'],
                    ['personal-need-handfoot', 'hand', 'Hand & Foot Care', 'Care in Every Touch and Step', 'Perawatan untuk tangan dan kaki yang bersih, sehat, dan tetap nyaman beraktivitas.', 'Care in every step'],
                    ['personal-need-onthego', 'bag', 'On-the-Go Care', 'Practical Solutions for Real Life', 'Format yang praktis dan mudah dibawa untuk mendukung gaya hidup aktif dan dinamis.', 'Ready when you are'],
                    ['personal-need-hygiene', 'flower', 'Personal Hygiene', 'Different Needs, Different Routines', 'Berbagai solusi untuk kebutuhan kebersihan pribadi yang beragam, sesuai dengan rutinitas setiap individu.', 'More possibilities'],
                ],
                'cta' => [
                    'lines' => ['Different people.', 'Different stories.', 'A brighter tomorrow.'],
                    'headline' => 'Let’s Create Personal Care Solutions for a Healthier, More Confident Tomorrow.',
                    'button' => 'Discuss Your Idea',
                ],
            ],
            'format' => [
                'eyebrow' => 'Personal Care',
                'title' => ['A Wide Range', 'of Possibilities.'],
                'kicker' => 'Personal care products, designed around real life needs.',
                'body' => [
                    'Lunaray membantu brand mengembangkan berbagai produk personal care dan hygiene dalam beragam format, yang dapat disesuaikan dengan target konsumen, area penggunaan, kebutuhan formulasi, sensorial, dan konsep brand.',
                    'Dari kebersihan harian hingga kesegaran sepanjang hari, kami menghadirkan fleksibilitas formulasi dan pilihan format untuk mewujudkan ide produk Anda.',
                ],
                'photo' => 'personal-products',
                'photoAlt' => 'Rangkaian produk personal care Lunaray: deodorant, oral care, dan daily care',
                'layout' => 'cards',
                'cards' => [
                    ['personal-card-deodorant', 'Deodorant & Freshness', ['Deodorant Spray', 'Roll-On Deodorant', 'Stick Deodorant', 'Cream Deodorant', 'Body Spray & Fragrance Mist', 'Refreshing Mist', 'and more.'], 'Stay fresh, stay confident'],
                    ['personal-card-oral', 'Oral Care', ['Toothpaste', 'Mouthwash', 'Oral Spray', 'Breath Freshener', 'Oral Care Gel', 'and more.'], 'A healthier smile, a fresher you'],
                    ['personal-card-hand', 'Hand Care & Hygiene', ['Hand Wash', 'Hand Cleansing Gel/Spray', 'Hand Sanitizer', 'Hand Cream', 'Hand Balm', 'and more.'], 'Clean hands, greater possibilities'],
                    ['personal-card-foot', 'Foot Care', ['Foot Spray', 'Foot Deodorant', 'Foot Cream', 'Foot Powder', 'Intensive Foot Care', 'and more.'], 'Care for every step'],
                    ['personal-card-hygiene', 'Daily Hygiene', ['Cleansing Wipes', 'Hygiene Spray', 'Cleansing Gel', 'Antibacterial Care', 'Daily Freshness Products', 'and more.'], 'Practical care for real life'],
                    ['personal-card-specialty', 'Specialty Formats', ['Dry Shampoo', 'Cleansing Foam', 'Cleansing Powder', 'Multi-Use Mist', 'Personal Care Sets', 'and more.'], 'Flexible formats for your ideas'],
                ],
                'cta' => [
                    'lines' => ['Different people.', 'Different stories.', 'A brighter tomorrow.'],
                    'headline' => 'Let’s Turn Everyday Needs into Extraordinary Products.',
                    'button' => 'Discuss Your Idea',
                ],
            ],
        ];
    }

    private static function fragrance(): array
    {
        return [
            'id' => 'fragrance',
            'name' => 'Fragrance',
            'arch' => 'arch-fragrance',
            'archItems' => ['Extrait', 'EDP', 'EDT', 'Body Mist'],
            'need' => [
                'eyebrow' => 'Fragrance',
                'title' => ['Fragrance That', 'Leaves an Impression.'],
                'kicker' => 'More than a scent. A part of your story.',
                'body' => [
                    'Lunaray membantu brand mengembangkan produk fragrance dan body fragrance dengan berbagai arah aroma, format, dan karakter yang disesuaikan dengan target konsumen, positioning brand, serta pengalaman penggunaan yang ingin diciptakan.',
                    'Dari konsep aroma hingga formulasi dan produksi, kami menghadirkan solusi untuk mewujudkan fragrance yang tidak hanya harum, tetapi juga relevan dengan gaya hidup dan identitas brand Anda.',
                ],
                'photo' => 'frag-model',
                'photoAlt' => 'Model memegang botol parfum di ruangan bernuansa floral',
                'needsStyle' => 'photoCards',
                'needsCompact' => true,
                'needs' => [
                    ['frag-family-fresh', 'leaf', 'Fresh', 'Clean and Energetic', 'Aroma segar untuk aktivitas sehari-hari, memberikan rasa bersih dan percaya diri.'],
                    ['frag-family-floral', 'flower', 'Floral', 'Elegant and Timeless', 'Keharuman bunga yang feminin dan memikat, cocok untuk berbagai kesempatan.'],
                    ['frag-family-fruity', 'apple', 'Fruity', 'Playful and Youthful', 'Aroma buah yang ceria dan modern, menghadirkan energi positif dalam setiap momen.'],
                    ['frag-family-woody', 'rings3', 'Woody', 'Bold and Sophisticated', 'Karakter aroma yang hangat dan maskulin, memberikan kesan kuat dan elegan.'],
                    ['frag-family-gourmand', 'star', 'Gourmand', 'Warm and Addictive', 'Aroma manis yang nyaman dan memikat, membangun kesan yang tak terlupakan.'],
                    ['frag-family-clean', 'drop', 'Clean', 'Pure and Modern', 'Karakter aroma yang bersih dan menenangkan, cocok untuk gaya hidup masa kini.'],
                    ['frag-family-warm', 'flame', 'Warm', 'Comforting and Intimate', 'Aroma yang hangat dan menenangkan, menciptakan rasa dekat dan nyaman.'],
                    ['frag-family-signature', 'heart', 'Signature Scent', 'Unique and Personal', 'Aroma khas yang mencerminkan identitas brand dan meninggalkan kesan mendalam.'],
                ],
                'cta' => [
                    'lines' => ['Different people.', 'Different stories.', 'A brighter tomorrow.'],
                    'headline' => 'Let’s Create Fragrance Solutions for a More Meaningful Tomorrow.',
                    'button' => 'Discuss Your Idea',
                ],
            ],
            'format' => [
                'eyebrow' => 'Fragrance',
                'title' => ['A Complete Range', 'of Fragrance Possibilities.'],
                'kicker' => 'From light mists to intense parfums.',
                'body' => [
                    'Lunaray membantu brand mengembangkan berbagai format produk fragrance, mulai dari body mist hingga extrait de parfum, dengan pilihan konsentrasi, karakter aroma, dan konsep yang dapat disesuaikan dengan target konsumen, positioning brand, serta pengalaman pemakaian yang ingin diciptakan.',
                    'Didukung oleh keahlian formulasi dan akses ke world-class fragrance resources, kami menghadirkan solusi fragrance yang relevan untuk berbagai segmen pasar.',
                ],
                'photo' => 'frag-products',
                'photoAlt' => 'Rangkaian produk fragrance Lunaray: eau de parfum, body mist, dan roll-on perfume',
                'layout' => 'cards',
                'cards' => [
                    ['frag-card-fine', 'Fine Fragrance', ['Extrait de Parfum', 'Eau de Parfum (EDP)', 'Eau de Toilette (EDT)', 'Eau de Cologne (EDC)'], 'Timeless scents for every you'],
                    ['frag-card-mist', 'Mist & Light Fragrance', ['Body Mist', 'Fragrance Mist', 'Hair & Body Mist', 'Refreshing Mist'], 'Lighter scents for everyday moments'],
                    ['frag-card-portable', 'Portable Fragrance', ['Roll-On Perfume', 'Solid Perfume', 'Perfume Balm', 'Pocket Fragrance'], 'Your scent anywhere, anytime'],
                    ['frag-card-hair', 'Hair Fragrance', ['Hair Mist', 'Hair Perfume', 'Hair & Scalp Fragrance'], 'Fresh hair, lasting confidence'],
                    ['frag-card-collections', 'Fragrance Collections', ['Layering Fragrance', 'Discovery Set', 'Customized Fragrance Collection', 'Private Label Development'], 'Create a signature scent story'],
                    ['frag-card-beyond', 'Beyond Personal Fragrance', ['Scented Body Products', 'Fragrance for Home & Spaces', 'Special Project Fragrances'], 'Expanding scent experiences'],
                ],
                'concentration' => [
                    'label' => 'Understanding Fragrance Concentration',
                    'sub' => 'Different concentrations create different olfactive experiences. Choose the right intensity for your brand and your consumers.',
                    'note' => 'Concentration ranges may vary depending on formulation, fragrance oils, and creative direction.',
                    'items' => [
                        ['frag-conc-extrait', '20–40%', 'Extrait de Parfum (Parfum)', 'Highest concentration', 'Rich, intense, long-lasting'],
                        ['frag-conc-edp', '15–20%', 'Eau de Parfum (EDP)', 'Long-lasting', 'Full-bodied'],
                        ['frag-conc-edt', '8–15%', 'Eau de Toilette (EDT)', 'Moderate', 'Fresh and versatile'],
                        ['frag-conc-edc', '3–8%', 'Eau de Cologne (EDC)', 'Lighter', 'Refreshing'],
                        ['frag-conc-mist', '1–5%', 'Body / Fragrance Mist', 'Light and airy', 'Perfect for everyday use'],
                    ],
                ],
                'cta' => [
                    'lines' => ['Different people.', 'Different stories.', 'A brighter tomorrow.'],
                    'headline' => 'Let’s Create a Fragrance That Feels Right.',
                    'button' => 'Discuss Your Idea',
                ],
            ],
        ];
    }

    private static function decorative(): array
    {
        return [
            'id' => 'decorative-cosmetics',
            'name' => 'Decorative Cosmetics',
            'arch' => 'arch-decorative',
            'archItems' => ['Complexion', 'Lips', 'Eyes', 'Cheeks'],
            'need' => null,
            'format' => [
                'eyebrow' => 'Decorative Cosmetics',
                'title' => ['From Color', 'to Complexion.', 'More Ways to Create.'],
                'accent' => 2,
                'kicker' => 'A wide range of makeup products, built around your brand vision.',
                'body' => [
                    'Sebagai pabrik dan mitra pengembangan kosmetik, Lunaray dapat membantu brand menciptakan berbagai produk decorative cosmetics dengan formulasi, tekstur, warna, dan hasil akhir yang disesuaikan dengan konsep, target konsumen, dan tren pasar.',
                    'Dari complexion, lip, eye, hingga face color dan hybrid makeup, kami mendukung pengembangan produk yang relevan, berkualitas, dan siap diproduksi dalam skala nyata.',
                ],
                'photo' => 'deco-products',
                'photoAlt' => 'Rangkaian produk makeup Lunaray: cushion, foundation, lipstick, lip gloss, eyeshadow palette, dan blush',
                'layout' => 'cards',
                'cardsLabel' => 'Our Decorative Cosmetics Product Possibilities',
                'cardsInline' => true,
                'cards' => [
                    ['deco-card-complexion', 'Complexion', ['Foundation', 'Cushion', 'Skin Tint', 'Concealer', 'Primer', 'Loose Powder', 'Compact Powder', 'and more.'], 'Flawless bases'],
                    ['deco-card-lips', 'Lips', ['Lipstick', 'Lip Cream', 'Lip Tint', 'Lip Gloss', 'Tinted Lip Balm', 'and more.'], 'Colors that speak'],
                    ['deco-card-eyes', 'Eyes & Brows', ['Eyeshadow', 'Eyeliner', 'Mascara', 'Brow Pencil', 'Brow Mascara', 'and more.'], 'Define every look'],
                    ['deco-card-cheeks', 'Cheeks & Face Color', ['Blush', 'Highlighter', 'Bronzer', 'Contour', 'and more.'], 'Dimension in every shade'],
                    ['deco-card-hybrid', 'Hybrid & Multi-Use', ['Skincare-Makeup Hybrid', 'Multi-Use Color', 'Tinted Care', 'Functional Makeup', 'and more.'], 'Beauty with extra benefits'],
                    ['deco-card-palettes', 'Palettes & Collections', ['Face Palette', 'Eye Palette', 'Lip Set', 'Customized Collection', 'and more.'], 'Made for your brand'],
                ],
                'cta' => [
                    'lines' => ['Different people.', 'Different stories.', 'A brighter tomorrow.'],
                    'headline' => 'Let’s Create Makeup That Moves Your Brand Forward.',
                    'button' => 'Discuss Your Idea',
                ],
            ],
        ];
    }
}
