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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->increments('id_peminjaman'); // Primary key auto-increment
            $table->unsignedInteger('no_buku'); // Foreign key no_buku, integer
            $table->foreign('no_buku')->references('no_buku')->on('buku'); // Referensi ke tabel buku
            $table->unsignedInteger('id_anggota'); // Foreign key id_anggota, integer
            $table->foreign('id_anggota')->references('id_anggota')->on('anggota'); // Referensi ke tabel anggota
            $table->date('tanggal_peminjaman'); // Tanggal peminjaman, date
            $table->date('tanggal_pengembalian')->nullable(); // Tanggal pengembalian, date, nullable
            $table->enum('status', ['kembali', 'belum'])->default('belum'); // Status peminjaman, enum('kembali', 'belum'), default 'belum'
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
        Schema::dropIfExists('peminjaman');
    }
};
