<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aplitems', function (Blueprint $table) {
            $table->id();
            $table->string('id_apl');
            $table->string('item_name');
            $table->string('item_type');
            $table->string('item_icon')->nullable();
            $table->string('item_amount');
            $table->string('item_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aplitems');
    }
};
