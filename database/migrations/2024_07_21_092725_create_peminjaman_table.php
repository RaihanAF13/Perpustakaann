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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->integer('id_peminjaman')->primary()->autoIncrement();
            $table->integer('no_buku');
            $table->foreign('no_buku')->references('no_buku')->on('buku')->index('peminjaman_no_buku');
            $table->integer('id_anggota');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggota')->index('peminjaman_id_anggota');
            $table->date('tgl_peminjaman');
            $table->date('tgl_pengembalian');
            $table->enum('status', ['Dipinjam', 'Dikembalikan']);
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
