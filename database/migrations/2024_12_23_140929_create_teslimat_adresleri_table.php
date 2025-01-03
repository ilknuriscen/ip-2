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
        Schema::create('teslimat_adresleri', function (Blueprint $table) {
            $table->id('adres_id');
            $table->unsignedBigInteger('kullanici_id');
            $table->text('adres');
            $table->string('sehir', 50)->nullable();
            $table->string('posta_kodu', 20)->nullable();
            $table->timestamps();

            $table->foreign('kullanici_id')->references('kullanici_id')->on('kullanicilar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teslimat_adresleri');
    }
};
