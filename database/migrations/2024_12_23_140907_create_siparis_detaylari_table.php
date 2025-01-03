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
        Schema::create('siparis_detaylari', function (Blueprint $table) {
            $table->id('siparis_detay_id');
            $table->unsignedBigInteger('siparis_id');
            $table->unsignedBigInteger('urun_id');
            $table->float('miktar');
            $table->float('birim_fiyat');
            $table->float('toplam_fiyat');
            $table->foreign('siparis_id')->references('siparis_id')->on('siparisler');
            $table->foreign('urun_id')->references('urun_id')->on('urunler');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siparis_detaylari');
    }
};
