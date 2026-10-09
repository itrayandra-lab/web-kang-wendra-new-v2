<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $categories = [
            ['slug' => 'research', 'name' => 'Research'],
            ['slug' => 'science', 'name' => 'Science'],
            ['slug' => 'lunaray-innovation', 'name' => 'Lunaray Innovation'],
        ];

        foreach ($categories as $category) {
            DB::table('post_categories')->insertOrIgnore([
                'slug' => $category['slug'],
                'name' => $category['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        DB::table('post_tags')->insertOrIgnore([
            'slug' => 'beautyversity',
            'name' => 'Beautyversity',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('post_categories')->whereIn('slug', ['research', 'science', 'lunaray-innovation'])->delete();
        DB::table('post_tags')->where('slug', 'beautyversity')->delete();
    }
};
