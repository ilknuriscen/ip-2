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
        Schema::create('iade_talepleri', function (Blueprint $table) {
            $table->id('iade_id');
            $table->unsignedBigInteger('siparis_id');
            $table->text('iade_nedeni')->nullable();
            $table->string('iade_durumu', 50)->nullable();
            $table->timestamp('iade_tarihi')->useCurrent();
            $table->timestamps();

            $table->foreign('siparis_id')->references('siparis_id')->on('siparisler');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iade_talepleri');
    }
};
