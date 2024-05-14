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
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('no_buku'); // Primary key auto-increment
            $table->string('judul', 200); // Judul buku, varchar(200)
            $table->string('edisi', 50); // Edisi buku, varchar(50)
            $table->unsignedInteger('no_rak'); // Foreign key no_rak, integer
            $table->foreign('no_rak')->references('kd_rak')->on('rak'); // Referensi ke tabel rak
            $table->date('tahun'); // Tahun terbit buku, date
            $table->string('penerbit', 100); // Nama penerbit, varchar(100)
            $table->unsignedInteger('kd_penulis'); // Foreign key kd_penulis, integer
            $table->foreign('kd_penulis')->references('kd_penulis')->on('penulis'); // Referensi ke tabel penulis
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
        Schema::dropIfExists('buku');
    }
};
