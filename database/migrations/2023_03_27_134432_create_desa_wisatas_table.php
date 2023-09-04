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
        Schema::create('desa_wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('jenis')->nullable();
            $table->string('strata')->nullable();
            $table->string('region_kec');
            $table->string('region_kel');
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('nama_pengelola')->nullable();
            $table->string('nama_desa')->nullable();
            $table->string('website')->nullable();
            $table->string('tahun_dibentuk')->nullable();
            $table->integer('jumlah_pemandu')->nullable();
            $table->integer('jumlah_pemandu_bersertifikat')->nullable();
            $table->integer('jumlah_toilet')->nullable();
            $table->integer('jumlah_tempat_ibadah')->nullable();
            $table->integer('jumlah_penginapan')->nullable();
            $table->integer('jumlah_warung_makan')->nullable();
            $table->integer('jumlah_toko_cinderamata')->nullable();
            $table->integer('luas_area_parkir')->nullable();
            $table->longText('nama_atraksi_wisata')->nullable();
            $table->longText('rincian_paket_wisata')->nullable();
            $table->integer('fb')->nullable();
            $table->integer('ig')->nullable();
            $table->integer('tiktok')->nullable();
            $table->integer('youtube')->nullable();
            $table->double('lng', 8, 8)->nullable();
            $table->double('ltd', 8, 8)->nullable();
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
        Schema::dropIfExists('desa_wisatas');
    }
};
