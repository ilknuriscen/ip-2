<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('kampanyalar', function (Blueprint $table) {
            $table->id('kampanya_id');
            $table->unsignedBigInteger('urun_id');
            $table->string('kampanya_adi', 100);
            $table->float('indirim_orani');
            $table->date('baslangic_tarihi')->nullable();
            $table->date('bitis_tarihi')->nullable();
            $table->timestamps();

            $table->foreign('urun_id')->references('urun_id')->on('urunler');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('kampanyalar');
    }
};
