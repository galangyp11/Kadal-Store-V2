<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            ['payment_name' => 'BCA', 'payment_icon'=> '../img/icon_bca.png', 'payment_tax' => '.10', 'created_at' => now(), 'updated_at' => now()],
            ['payment_name' => 'DANA', 'payment_icon'=> '../img/icon_dana.png', 'payment_tax' => '.11', 'created_at' => now(), 'updated_at' => now()],
            ['payment_name' => 'GOPAY', 'payment_icon'=> '../img/icon_gopay.png', 'payment_tax' => '.12', 'created_at' => now(), 'updated_at' => now()],
            ['payment_name' => 'QRIS', 'payment_icon'=> '../img/icon_qris.png', 'payment_tax' => '.05', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
