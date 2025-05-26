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
        Schema::create('tindakan_t', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal')->nullable();
            $table->string('keluhan')->nullable();
            $table->string('hasil_diagnosa')->nullable();
            $table->integer('pasien_daftar_id')->nullable();
            $table->foreign('pasien_daftar_id')
                ->references('id')
                ->on('pasien_daftar_t')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tindakan_t');
    }
};
