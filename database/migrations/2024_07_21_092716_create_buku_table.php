<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->integer('no_buku')->primary()->autoIncrement();
            $table->string('judul');
            $table->string('edisi');
            $table->integer('no_rak');
            $table->foreign('no_rak')->references('kd_rak')->on('rak')->index('kd_rak');
            $table->date('tahun');
            $table->string('penerbit');
            $table->integer('kd_penulis');
            $table->foreign('kd_penulis')->references('kd_penulis')->on('penulis')->index('buku_kd_penulis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
