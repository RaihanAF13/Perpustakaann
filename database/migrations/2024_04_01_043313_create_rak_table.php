<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('rak', function (Blueprint $table) {
            $table->increments('kd_rak');
            $table->string('lokasi_rak', 150);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rak');
    }
};
