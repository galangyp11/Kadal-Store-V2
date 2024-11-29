<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AplsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('apls')->insert([
            ['apl_name' => 'Mobile Legends', 'apl_icon'=> '../img/icon_mlbb.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['apl_name' => 'Clash Royale', 'apl_icon'=> '../img/icon_cr.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
