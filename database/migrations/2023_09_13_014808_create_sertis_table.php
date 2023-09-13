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
        Schema::create('sertis', function (Blueprint $table) {
            $table->id();
            $table->string('ekraf_id')->nullable();
            $table->string('pelaku_wisata_id')->nullable();
            $table->string('lembaga_penguji')->nullable();
            $table->string('nomor_registrasi')->nullable();
            $table->string('nomor_bnsp')->nullable();
            $table->string('tahun')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertis');
    }
};
