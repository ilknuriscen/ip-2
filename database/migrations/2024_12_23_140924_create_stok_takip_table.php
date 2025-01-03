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
        Schema::create('stok_takip', function (Blueprint $table) {
            $table->id('stok_id');
            $table->unsignedBigInteger('urun_id');
            $table->float('guncel_stok');
            $table->timestamp('son_guncelleme_tarihi')->useCurrent();
            $table->timestamps();

            $table->foreign('urun_id')->references('urun_id')->on('urunler');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_takip');
    }
};
