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
        Schema::create('pajak_pelaku_wisatas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelaku_wisata_id');
            $table->string('tahun')->nullable();
            $table->string('pajak')->nullable();
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
        Schema::dropIfExists('pajak_pelaku_wisatas');
    }
};
