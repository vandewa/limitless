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
        Schema::create('uspars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('master_data_usaha_pariwisata_id');
            $table->string('nama_usaha')->nullable();
            $table->string('nama_pemilik')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_telp')->nullable();
            $table->integer('tenaga_l')->nullable();
            $table->integer('tenaga_p')->nullable();
            $table->string('izin_dimiliki')->nullable();
            $table->integer('jml_kamar')->nullable();
            $table->string('asosiasi')->nullable();
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
        Schema::dropIfExists('uspars');
    }
};
