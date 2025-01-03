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
        Schema::create('odemeler', function (Blueprint $table) {
            $table->id('odeme_id');
            $table->unsignedBigInteger('siparis_id');
            $table->string('odeme_turu', 50)->nullable();
            $table->timestamp('odeme_tarihi')->useCurrent();
            $table->float('tutar');
            $table->foreign('siparis_id')->references('siparis_id')->on('siparisler');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odemeler');
    }
};
