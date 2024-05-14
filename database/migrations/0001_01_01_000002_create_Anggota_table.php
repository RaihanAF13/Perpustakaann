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
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('id_anggota'); // Primary key auto-increment
            $table->string('nama', 150); // Nama anggota, varchar(150)
            $table->string('no_hp', 16); // Nomor HP, varchar(16)
            $table->text('alamat'); // Alamat, text
            $table->string('email', 200)->unique(); // Email, varchar(200), unique
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
        Schema::dropIfExists('anggota');
    }
};
