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
        Schema::create('subsektor_pelaku_wisatas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelaku_wisata_id')->nullable();
            $table->unsignedBigInteger('subsektor_id')->nullable();
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
        Schema::dropIfExists('subsektor_pelaku_wisatas');
    }
};
