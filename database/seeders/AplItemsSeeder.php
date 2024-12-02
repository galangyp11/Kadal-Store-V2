<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AplItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aplitems')->insert([
            ['id_apl' => '1','item_name'=>'Diamond', 'item_type'=>'Diamond', 'item_icon'=> '../img/icon_diamond.png', 'item_amount'=>'11', 'item_price'=>'6000', 'created_at' => now(), 'updated_at' => now()],
            ['id_apl' => '1','item_name'=>'Diamond', 'item_type'=>'Diamond', 'item_icon'=> '../img/icon_diamond.png', 'item_amount'=>'23', 'item_price'=>'11000', 'created_at' => now(), 'updated_at' => now()],
            ['id_apl' => '1','item_name'=>'Diamond', 'item_type'=>'Diamond', 'item_icon'=> '../img/icon_diamond.png', 'item_amount'=>'37', 'item_price'=>'15000', 'created_at' => now(), 'updated_at' => now()],
            ['id_apl' => '1','item_name'=>'Diamond', 'item_type'=>'Diamond', 'item_icon'=> '../img/icon_diamond.png', 'item_amount'=>'50', 'item_price'=>'22000', 'created_at' => now(), 'updated_at' => now()],
            ['id_apl' => '1','item_name'=>'Diamond', 'item_type'=>'Diamond', 'item_icon'=> '../img/icon_diamond.png', 'item_amount'=>'77', 'item_price'=>'34000', 'created_at' => now(), 'updated_at' => now()],
            ['id_apl' => '1','item_name'=>'Diamond', 'item_type'=>'Diamond', 'item_icon'=> '../img/icon_diamond.png', 'item_amount'=>'100', 'item_price'=>'40000', 'created_at' => now(), 'updated_at' => now()],
            ['id_apl' => '1','item_name'=>'Diamond', 'item_type'=>'Diamond', 'item_icon'=> '../img/icon_diamond.png', 'item_amount'=>'250', 'item_price'=>'85000', 'created_at' => now(), 'updated_at' => now()],
            ['id_apl' => '2','item_name'=>'Gem', 'item_type'=>'Gem', 'item_icon'=> '../img/icon_gem.png', 'item_amount'=>'50', 'item_price'=>'30000', 'created_at' => now(), 'updated_at' => now()],
            ['id_apl' => '2','item_name'=>'Gem', 'item_type'=>'Gem', 'item_icon'=> '../img/icon_gem.png', 'item_amount'=>'250', 'item_price'=>'80000', 'created_at' => now(), 'updated_at' => now()],
            ['id_apl' => '2','item_name'=>'Gem', 'item_type'=>'Gem', 'item_icon'=> '../img/icon_gem.png', 'item_amount'=>'250', 'item_price'=>'240000', 'created_at' => now(), 'updated_at' => now()],
            ['id_apl' => '2','item_name'=>'Gem', 'item_type'=>'Gem', 'item_icon'=> '../img/icon_gem.png', 'item_amount'=>'300', 'item_price'=>'260000', 'created_at' => now(), 'updated_at' => now()],
            ['id_apl' => '2','item_name'=>'Gem', 'item_type'=>'Gem', 'item_icon'=> '../img/icon_gem.png', 'item_amount'=>'500', 'item_price'=>'300000', 'created_at' => now(), 'updated_at' => now()],
            ['id_apl' => '2','item_name'=>'Gem', 'item_type'=>'Gem', 'item_icon'=> '../img/icon_gem.png', 'item_amount'=>'2000', 'item_price'=>'500000', 'created_at' => now(), 'updated_at' => now()],
            ['id_apl' => '2','item_name'=>'Gem', 'item_type'=>'Gem', 'item_icon'=> '../img/icon_gem.png', 'item_amount'=>'2500', 'item_price'=>'1150000', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
