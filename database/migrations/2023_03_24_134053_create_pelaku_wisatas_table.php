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
        Schema::create('pelaku_wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik')->nullable();
            $table->string('nik')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->longText('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('jenis_barang_jasa')->nullable();
            $table->string('nama_usaha')->nullable();
            $table->string('nama_merek')->nullable();
            $table->string('organisasi_id')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->integer('jml_tenaga')->nullable();
            $table->string('npwp')->nullable();
            $table->string('logo')->nullable();
            $table->string('nib')->nullable();
            $table->date('tgl_nib')->nullable();
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
        Schema::dropIfExists('pelaku_wisatas');
    }
};
