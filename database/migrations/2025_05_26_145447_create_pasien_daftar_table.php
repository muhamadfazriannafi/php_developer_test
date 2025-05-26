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
        Schema::create('pasien_daftar_t', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id')->nullable();
            $table->dateTime('tanggal_daftar')->nullable();
            $table->foreign('pasien_id')->references('id')->on('pasien_m')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien_daftar_t');
    }
};
