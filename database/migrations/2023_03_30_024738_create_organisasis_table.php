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
        Schema::create('organisasis', function (Blueprint $table) {
            $table->id();
            $table->string('jenis')->nullable();
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('ketua')->nullable();
            $table->string('contact')->nullable();
            $table->string('jenis_legal_formal')->nullable();
            $table->string('nomor_legal_formal')->nullable();
            $table->string('lembaga_yang_mengeluarkan')->nullable();
            $table->string('anggota_lelaki')->nullable();
            $table->string('anggota_perempuan')->nullable();
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
        Schema::dropIfExists('organisasis');
    }
};
