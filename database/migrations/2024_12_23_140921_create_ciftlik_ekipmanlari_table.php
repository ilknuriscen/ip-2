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
        Schema::create('ciftlik_ekipmanlari', function (Blueprint $table) {
            $table->id('ekipman_id');
            $table->unsignedBigInteger('ciftci_id');
            $table->string('ekipman_adi', 100);
            $table->integer('miktar');
            $table->timestamps();

            $table->foreign('ciftci_id')->references('ciftci_id')->on('ciftciler');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciftlik_ekipmanlari');
    }
};
