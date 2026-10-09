<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\WebIdentity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ProductionDataSeeder extends Seeder
{
    /**
     * ================================================================
     * PRODUCTION DATA SEEDER
     * ================================================================
     * GUNAKAN SEEDER INI UNTUK SETUP DATA AWAL DI PRODUCTION SERVER.
     *
     * CARA PAKAI:
     * 1. php artisan migrate --seed --class=ProductionDataSeeder
     *    (jika fresh install)
     *
     * 2. Atau import langsung via SQL:
     *    php artisan db:seed --class=ProductionDataSeeder
     *    (jika database sudah ada)
     *
     * ================================================================
     * CREDENTIALS:
     *   Email:    it@lunaray.id
     *   Password: @R4y4ndr4
     *
     * Ganti credentials setelah login!
     * ================================================================
     */

    public function run(): void
    {
        // --- ROLES & PERMISSIONS ---
        $permissions = [
            'view users', 'create users', 'edit users', 'delete users',
            'view posts', 'create posts', 'edit posts', 'delete posts',
            'manage roles', 'manage permissions',
            'manage web identities',
            'view pages', 'create pages', 'edit pages', 'delete pages',
            'view menu', 'create menu', 'edit menu', 'delete menu',
            'view categories', 'create categories', 'edit categories', 'delete categories',
            'view tags', 'create tags', 'edit tags', 'delete tags',
            'view album', 'create album', 'edit album', 'delete album',
            'view video', 'create video', 'edit video', 'delete video',
            'view information', 'create information', 'edit information', 'delete information',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->syncPermissions($permissions);

        // --- USERS ---
        // Update atau create admin dengan credentials production
        $admin = User::updateOrCreate(
            ['email' => 'it@lunaray.id'],
            [
                'name' => 'Lunaray Admin',
                'slug' => 'lunaray-admin',
                'password' => Hash::make('@R4y4ndr4'),
                'status' => 'active',
                'failed_upload_attempts' => 0,
            ]
        );
        $admin->assignRole('admin');

        // Hapus semua user lain EXCEPT admin ini
        User::where('email', '!=', 'it@lunaray.id')->delete();

        $this->command->info('[ProductionDataSeeder] Admin user: it@lunaray.id / @R4y4ndr4');
        $this->command->info('[ProductionDataSeeder] Other users deleted. Remaining: ' . User::count());

        // --- WEB IDENTITY ---
        $existingIdentity = WebIdentity::first();
        if (!$existingIdentity) {
            WebIdentity::create([
                'web_name' => 'Lunaray',
                'email' => 'it@lunaray.id',
                'domain' => 'https://lunaray.id',
                'phone_number' => '#',
                'facebook_link' => '#',
                'instagram_link' => '#',
                'youtube_link' => '#',
                'twitter_link' => '#',
                'google_maps' => 'https://maps.google.com/',
                'meta_title' => 'Lunaray — Science in Beauty, Beauty in Reality',
                'meta_description' => 'Lunaray adalah cosmetic manufacturer di Indonesia yang menghubungkan science-based product development, AI, dan real manufacturing untuk membantu brand mengembangkan produk kosmetik.',
                'meta_keywords' => 'lunaray, cosmetic manufacturer, product development, AI beauty, scientific evidence, cosmetic manufacturing indonesia',
                'og_image' => null,
                'favicon' => 'assets/img/lunaray/brand/favicon-lunaray-white.webp',
                'logo' => 'assets/img/lunaray/brand/logo-lunaray.webp',
                'status' => 'active',
                'api_posts' => null,
                'api_key_master' => null,
                'version' => '1.0.0',
                'is_master' => true,
            ]);
            $this->command->info('[ProductionDataSeeder] WebIdentity created.');
        } else {
            // Update existing WebIdentity
            $existingIdentity->update([
                'web_name' => 'Lunaray',
                'email' => 'it@lunaray.id',
                'domain' => 'https://lunaray.id',
                'meta_title' => 'Lunaray — Science in Beauty, Beauty in Reality',
                'meta_description' => 'Lunaray adalah cosmetic manufacturer di Indonesia yang menghubungkan science-based product development, AI, dan real manufacturing untuk membantu brand mengembangkan produk kosmetik.',
                'meta_keywords' => 'lunaray, cosmetic manufacturer, product development, AI beauty, scientific evidence, cosmetic manufacturing indonesia',
                'favicon' => 'assets/img/lunaray/brand/favicon-lunaray-white.webp',
                'logo' => 'assets/img/lunaray/brand/logo-lunaray.webp',
            ]);
            $this->command->info('[ProductionDataSeeder] WebIdentity updated.');
        }
    }
}
