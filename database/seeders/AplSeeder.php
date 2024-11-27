<?php

namespace Database\Seeders;

use App\Models\Apl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AplSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Apl::factory()->count(4)->create();
    }
}
