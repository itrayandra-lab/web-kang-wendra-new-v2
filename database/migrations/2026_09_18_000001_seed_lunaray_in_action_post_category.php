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
        DB::table('post_categories')->insertOrIgnore([
            'slug' => 'lunaray-in-action',
            'name' => 'Lunaray in Action',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('post_categories')->where('slug', 'lunaray-in-action')->delete();
    }
};
