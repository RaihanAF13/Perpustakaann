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
        Schema::create('sanksi', function (Blueprint $table) {
            $table->increments('id_sanksi'); // Primary key auto-increment
            $table->unsignedInteger('anggota'); // Foreign key anggota, integer
            $table->foreign('anggota')->references('id_anggota')->on('anggota'); // Referensi ke tabel anggota
            $table->unsignedInteger('id_peminjaman'); // Foreign key id_peminjaman, integer
            $table->foreign('id_peminjaman')->references('id_peminjaman')->on('peminjaman'); // Referensi ke tabel peminjaman
            $table->integer('jumlah_denda'); // Jumlah denda, integer
            $table->enum('status', ['tunggakan', 'lunas'])->default('tunggakan'); // Status sanksi, enum('tunggakan', 'lunas'), default 'tunggakan'
            $table->timestamps(); // Tanggal pembuatan dan update record
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanksi');
    }
};