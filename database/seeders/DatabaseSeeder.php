<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Apl;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AplsSeeder::class,
        ]);
        $this->call([
            PaymentSeeder::class,
        ]);
        $this->call([
            AplItemsSeeder::class,
        ]);
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Apl::factory(2)->create();
    }
}
