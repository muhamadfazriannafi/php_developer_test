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
        Schema::create('pasien_m', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->dateTime('tanggal_lahir')->nullable();
            $table->integer('jenis_kelamin_id')->nullable();
            $table->string('nomor_hape')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien_m');
    }
};
