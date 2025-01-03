<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('kullanicilar', function (Blueprint $table) {
            $table->id('kullanici_id');
            $table->string('ad_soyad', 100);
            $table->string('email', 100)->unique();
            $table->string('telefon', 15)->nullable();
            $table->string('sifre', 255);
            $table->unsignedBigInteger('rol_id');
            $table->timestamp('kayit_tarihi')->useCurrent();
            $table->foreign('rol_id')->references('rol_id')->on('roller');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('kullanicilar');
    }
};
