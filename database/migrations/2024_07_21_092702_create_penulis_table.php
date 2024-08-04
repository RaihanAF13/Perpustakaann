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
        Schema::create('penulis', function (Blueprint $table) {
            $table->integer('kd_penulis')->primary()->autoIncrement();
            $table->string('nama_penulis');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('email');
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
