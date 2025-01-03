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
        // Migration dosyanızdaki tablo adı "yorumlar" olarak tanımlandı
        Schema::create('yorumlar', function (Blueprint $table) {
            $table->id('yorum_id');
            $table->unsignedBigInteger('urun_id');
            $table->unsignedBigInteger('kullanici_id');
            $table->text('yorum_metni')->nullable();
            $table->integer('puan')->check('puan BETWEEN 1 AND 5');
            $table->timestamp('yorum_tarihi')->useCurrent();
            $table->timestamps();

            $table->foreign('urun_id')->references('urun_id')->on('urunler');
            $table->foreign('kullanici_id')->references('kullanici_id')->on('kullanicilar');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yorumlar');
    }
};
