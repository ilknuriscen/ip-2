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
        Schema::create('ciftciler', function (Blueprint $table) {
            $table->id('ciftci_id');
            $table->unsignedBigInteger('kullanici_id');
            $table->string('ciftlik_adi', 100)->nullable();
            $table->unsignedBigInteger('bolge_id')->nullable();
            $table->string('urun_turu', 50)->nullable();
            $table->foreign('kullanici_id')->references('kullanici_id')->on('kullanicilar');
            $table->foreign('bolge_id')->references('bolge_id')->on('bolgeler');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciftciler');
    }
};
