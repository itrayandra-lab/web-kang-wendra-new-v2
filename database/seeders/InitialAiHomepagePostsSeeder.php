<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InitialAiHomepagePostsSeeder extends Seeder
{
    public function run(): void
    {
        $userId = User::query()->value('id');
        $categoryId = PostCategory::where('slug', 'ai-teknologi')->value('id')
            ?? PostCategory::query()->value('id');

        if (! $userId) {
            $this->command?->error('Tidak ada user yang dapat dijadikan pembuat artikel.');
            return;
        }

        $articles = [
            [
                'title' => 'AI Agent yang Berguna Dimulai dari Pekerjaan yang Jelas',
                'source' => 'https://openai.com/index/introducing-openai-presence/',
                'domain' => 'openai.com',
                'image' => 'assets/img/background/section-9-bg.png',
                'excerpt' => 'Nilai AI agent tidak ditentukan oleh seberapa banyak fitur yang dimiliki, tetapi oleh kejelasan pekerjaan, batas tindakan, dan jalur eskalasinya.',
                'content' => <<<'HTML'
<p>AI agent mulai memberi nilai ketika organisasi berhenti memperlakukannya sebagai demo teknologi dan mulai merancangnya sebagai bagian dari sistem kerja. Titik awalnya bukan memilih model paling baru, melainkan menentukan satu pekerjaan yang jelas: informasi apa yang boleh digunakan, tindakan apa yang boleh dilakukan, dan kapan keputusan harus dikembalikan kepada manusia.</p>
<p>Pendekatan ini membuat keandalan menjadi bagian dari desain. Kebijakan, guardrail, evaluasi, serta aturan eskalasi tidak ditempelkan setelah produk selesai. Semuanya dibangun sejak awal agar agent mampu bekerja konsisten ketika konteks, perilaku pelanggan, atau aturan bisnis berubah.</p>
<h2>Implikasinya bagi bisnis</h2>
<p>Perusahaan tidak cukup hanya memberi akses AI kepada tim. Mereka perlu membangun arsitektur kerja yang menyatukan knowledge, izin, alat, pengukuran kualitas, dan tanggung jawab manusia. AI dapat mempercepat eksekusi, tetapi arah dan standar keberhasilannya tetap harus ditentukan oleh organisasi.</p>
HTML,
            ],
            [
                'title' => 'Dari Eksperimen AI Menuju Sistem Kerja Perusahaan',
                'source' => 'https://openai.com/index/introducing-openai-frontier/',
                'domain' => 'openai.com',
                'image' => 'assets/img/background/section-11-bg.png',
                'excerpt' => 'Tantangan enterprise AI bukan lagi sekadar kemampuan model, melainkan bagaimana agent memperoleh konteks, izin, umpan balik, dan batas kerja.',
                'content' => <<<'HTML'
<p>Banyak organisasi telah membuktikan bahwa AI bisa membantu sebuah tugas. Tantangan berikutnya jauh lebih besar: membuat AI bekerja lintas fungsi tanpa menambah kekacauan baru. Agent yang berdiri sendiri akan sulit memberi dampak apabila tidak memahami konteks perusahaan, tidak terhubung dengan sistem yang relevan, atau tidak memiliki batas kewenangan yang tegas.</p>
<p>Karena itu, adopsi AI perlu dipandang sebagai pembangunan lapisan operasi baru. Agent membutuhkan proses onboarding, akses yang terukur, pembelajaran dari umpan balik, serta aturan yang menjelaskan apa yang boleh dan tidak boleh dilakukan. Struktur tersebut membuat kemampuan AI dapat digunakan secara berulang, bukan hanya dalam percobaan sesaat.</p>
<h2>Arsitektur lebih penting daripada demo</h2>
<p>Keunggulan tidak datang dari jumlah agent yang dibuat. Keunggulan datang dari kemampuan organisasi menyatukan manusia, data, workflow, dan AI menjadi sistem yang dapat diawasi dan terus diperbaiki.</p>
HTML,
            ],
            [
                'title' => 'Kedalaman Penggunaan AI Lebih Penting daripada Jumlah Pengguna',
                'source' => 'https://openai.com/index/introducing-b2b-signals/',
                'domain' => 'openai.com',
                'image' => 'assets/img/background/section-6-bg.png',
                'excerpt' => 'Ukuran kematangan AI bergeser dari berapa orang yang memakai alat menuju seberapa dalam AI mengubah cara kerja dan kualitas keputusan.',
                'content' => <<<'HTML'
<p>Jumlah akun aktif tidak selalu menggambarkan keberhasilan transformasi AI. Dua perusahaan dapat memiliki tingkat adopsi yang terlihat sama, tetapi menghasilkan dampak yang sangat berbeda. Perbedaannya muncul dari kedalaman penggunaan: apakah AI hanya dipakai untuk membuat ringkasan, atau sudah membantu penelitian, analisis, koordinasi, dan penyelesaian pekerjaan bertahap.</p>
<p>Organisasi yang lebih matang tidak berhenti pada akses. Mereka mengembangkan kebiasaan delegasi yang sehat, tata kelola produksi, program peningkatan kemampuan, dan ukuran kualitas yang dapat ditinjau. Dengan begitu, penggunaan AI berkembang dari bantuan individual menjadi kemampuan organisasi.</p>
<h2>Sinyal yang perlu diperhatikan</h2>
<p>Pemimpin perlu mengukur tugas apa yang berubah, waktu apa yang benar-benar dihemat, keputusan mana yang menjadi lebih baik, serta risiko baru apa yang muncul. Nilai AI terletak pada perubahan sistem kerja, bukan pada ramainya aktivitas di sebuah aplikasi.</p>
HTML,
            ],
            [
                'title' => 'Workspace Agent Mengubah Pengetahuan Tim Menjadi Kapabilitas Bersama',
                'source' => 'https://openai.com/index/introducing-workspace-agents-in-chatgpt/',
                'domain' => 'openai.com',
                'image' => 'assets/img/background/section-12-bg.png',
                'excerpt' => 'Agent bersama dapat mengubah proses, standar, dan pengetahuan internal menjadi cara kerja yang konsisten lintas anggota tim.',
                'content' => <<<'HTML'
<p>Pengetahuan penting dalam organisasi sering tersebar di dokumen, percakapan, dan pengalaman beberapa orang. Workspace agent membuka kemungkinan untuk mengubah pengetahuan tersebut menjadi kemampuan bersama yang dapat digunakan berulang kali oleh tim.</p>
<p>Namun, membagikan agent bukan sekadar membagikan prompt. Agent perlu memahami sumber informasi yang benar, urutan kerja, standar keluaran, dan titik persetujuan manusia. Ia juga harus mengikuti izin setiap pengguna sehingga akses terhadap data tetap sesuai dengan tanggung jawabnya.</p>
<h2>Dari personal productivity ke organizational capability</h2>
<p>Ketika proses yang baik dapat dipakai bersama dan disempurnakan dari waktu ke waktu, AI tidak hanya membuat satu orang bekerja lebih cepat. AI membantu organisasi mempertahankan kualitas, memperbaiki handoff, dan mengurangi ketergantungan pada pengetahuan yang sebelumnya tersimpan di kepala individu.</p>
HTML,
            ],
            [
                'title' => 'AI Enterprise Membutuhkan Integrasi, Bukan Sekadar Model',
                'source' => 'https://www.anthropic.com/news/anthropic-infosys',
                'domain' => 'anthropic.com',
                'image' => 'assets/img/background/section-5-bg.png',
                'excerpt' => 'Di industri yang diatur ketat, AI baru berguna ketika kemampuan model terhubung dengan proses, kontrol, dan kebutuhan operasional nyata.',
                'content' => <<<'HTML'
<p>Menerapkan AI di telekomunikasi, keuangan, manufaktur, atau industri lain yang diatur ketat membutuhkan lebih dari model yang cerdas. Organisasi harus menghubungkan kemampuan AI dengan sistem yang telah digunakan, aturan kepatuhan, alur persetujuan, dan kebutuhan operasional yang berbeda di setiap fungsi.</p>
<p>Agent yang mampu menangani pekerjaan panjang juga memerlukan transparansi. Tim perlu mengetahui sumber konteksnya, tindakan yang telah dilakukan, kegagalan yang terjadi, dan kondisi yang mengharuskan manusia mengambil alih. Tanpa mekanisme tersebut, otomasi berpotensi mempercepat kesalahan.</p>
<h2>Human judgment tetap menjadi fondasi</h2>
<p>AI dapat memperluas kapasitas manusia dan menjaga proses bergerak lebih cepat. Tetapi tujuan, batas risiko, serta keputusan yang berdampak besar tetap membutuhkan judgment. Sistem yang baik tidak menghilangkan manusia; sistem itu menempatkan manusia pada keputusan yang paling penting.</p>
HTML,
            ],
        ];

        foreach ($articles as $index => $article) {
            Posts::updateOrCreate(
                ['source' => $article['source']],
                [
                    'slug' => Str::slug($article['title']),
                    'title' => $article['title'],
                    'image' => $article['image'],
                    'content' => $article['content'],
                    'counter' => 0,
                    'status' => 'active',
                    'created_by' => $userId,
                    'category_id' => $categoryId,
                    'tags' => ['AI', 'Teknologi', 'Intelligent Business Systems'],
                    'domain' => $article['domain'],
                    'published_by' => 'system',
                    'published_at' => now()->subMinutes($index),
                    'meta_data' => [
                        'seo_title' => $article['title'],
                        'seo_desc' => $article['excerpt'],
                        'excerpt' => $article['excerpt'],
                        'ai_model' => 'codex-editorial-bootstrap',
                        'ref_source_url' => $article['source'],
                    ],
                ]
            );
        }

        $this->command?->info(count($articles).' artikel AI awal berhasil diaktifkan.');
    }
}
