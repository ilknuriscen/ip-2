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
        Schema::create('urunler', function (Blueprint $table) {
            $table->id('urun_id');
            $table->unsignedBigInteger('ciftci_id');
            $table->unsignedBigInteger('kategori_id');
            $table->string('urun_adi', 100);
            $table->float('birim_fiyat');
            $table->float('stok_miktari');
            $table->string('birim', 20)->nullable();
            $table->timestamp('eklenme_tarihi')->useCurrent();
            $table->foreign('ciftci_id')->references('ciftci_id')->on('ciftciler');
            $table->foreign('kategori_id')->references('kategori_id')->on('urun_kategorileri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urunler');
    }
};
