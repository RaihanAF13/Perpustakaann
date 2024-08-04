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
        Schema::create('sanksi', function (Blueprint $table) {
            $table->integer('id_sanksi')->primary()->autoIncrement();
            $table->integer('id_anggota');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggota')->index('sanksi_id_anggota');
            $table->integer('id_peminjaman');
            $table->foreign('id_peminjaman')->references('id_peminjaman')->on('peminjaman')->index('sanksi_id_peminjaman');
            $table->integer('jumlah_denda');
            $table->enum('status', ['Tunggakan', 'Lunas']);
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
