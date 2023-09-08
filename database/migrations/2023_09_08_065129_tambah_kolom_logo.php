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
        Schema::table('pelaku_wisatas', function (Blueprint $table) {
            $table->string('logo')->nullable();
            $table->string('nib')->nullable();
            $table->date('tgl_nib')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pelaku_wisatas', function (Blueprint $table) {
            //
        });
    }
};
