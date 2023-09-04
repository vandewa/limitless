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
        Schema::create('desa_pelatihans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_wisata_id');
            $table->string('nama')->nullable();
            $table->string('tahun')->nullable();
            $table->string('lembaga')->nullable();
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
        Schema::dropIfExists('desa_pelatihans');
    }
};
