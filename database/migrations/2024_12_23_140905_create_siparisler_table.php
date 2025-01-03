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
        Schema::create('siparisler', function (Blueprint $table) {
            $table->id('siparis_id');
            $table->unsignedBigInteger('kullanici_id');
            $table->timestamp('siparis_tarihi')->useCurrent();
            $table->float('toplam_tutar');
            $table->string('siparis_durumu', 50)->nullable();
            $table->foreign('kullanici_id')->references('kullanici_id')->on('kullanicilar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siparisler');
    }
};
