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
        Schema::create('omzet_pelaku_wisatas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelaku_wisata_id');
            $table->string('tahun')->nullable();
            $table->string('omzet')->nullable();
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
        Schema::dropIfExists('omzet_pelaku_wisatas');
    }
};
