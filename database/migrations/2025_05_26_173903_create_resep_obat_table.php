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
        Schema::create('resep_obat_t', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->string('no_resep')->nullable();
            $table->integer('obat_id')->nullable();
            $table->double('jumlah')->nullable();
            $table->string('aturan_pakai')->nullable();
            $table->string('keterangan')->nullable();
            $table->foreign('obat_id')->references('id')->on('obat_m')->onDelete('set null');
            $table->integer('pasien_daftar_id')->nullable();
            $table->foreign('pasien_daftar_id')->references('id')->on('pasien_daftar_t')->onDelete('set null');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resep_obat_t');
    }
};
