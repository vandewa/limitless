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
        Schema::create('desa_sks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_wisata_id');
            $table->string('nama');
            $table->date('tanggal')->nullable();
            $table->string('nomor')->nullable();
            $table->string('pejabat_yang_mengeluarkan')->nullable();
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
        Schema::dropIfExists('desa_sks');
    }
};
