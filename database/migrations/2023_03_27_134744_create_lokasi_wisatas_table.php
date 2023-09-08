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
        Schema::create('lokasi_wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lokasi_wisata_tp');
            $table->string('alamat')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('no_wa')->nullable();
            $table->string('email')->nullable();
            $table->string('harga_tiket')->nullable();
            $table->string('jam_operasional')->nullable();
            $table->string('website')->nullable();
            $table->boolean('pemandu_bersertifikat')->nullable();
            $table->boolean('toilet')->nullable();
            $table->boolean('tempat_ibadah')->nullable();
            $table->boolean('penginapan')->nullable();
            $table->boolean('warung_makan')->nullable();
            $table->boolean('toko_cinderamata')->nullable();
            $table->boolean('area_parkir')->nullable();
            $table->string('fb')->nullable();
            $table->string('ig')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('youtube')->nullable();
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
        Schema::dropIfExists('lokasi_wisatas');
    }
};
