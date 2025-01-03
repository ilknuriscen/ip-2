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
        Schema::create('sikayetler', function (Blueprint $table) {
            $table->id('sikayet_id');
            $table->unsignedBigInteger('kullanici_id');
            $table->text('metin');
            $table->timestamp('tarih')->useCurrent();
            $table->timestamps();

            $table->foreign('kullanici_id')->references('kullanici_id')->on('kullanicilar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sikayetler');
    }
};
