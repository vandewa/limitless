<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pelaku_wisata_id')->nullable();
            $table->string('nama')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('lembaga')->nullable();
            $table->string('jenis_sertifikat_tp')->nullable();
            $table->string('no_registrasi')->nullable();
            $table->string('no_sertifikat_bnps')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
};
