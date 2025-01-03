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
        Schema::create('favori_urunler', function (Blueprint $table) {
            $table->id('favori_id');
            $table->unsignedBigInteger('kullanici_id');
            $table->unsignedBigInteger('urun_id');
            $table->timestamps();

            $table->foreign('kullanici_id')->references('kullanici_id')->on('kullanicilar');
            $table->foreign('urun_id')->references('urun_id')->on('urunler');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favori_urunler');
    }
};
