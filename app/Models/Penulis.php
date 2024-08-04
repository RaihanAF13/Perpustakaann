<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    // Nama tabel di database
    protected $table = 'penulis';

    // Primary key dari tabel
    protected $primaryKey = 'kd_penulis';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama_penulis',
        'tempat_lahir',
        'tgl_lahir',
        'email',
    ];

    // Mengindikasikan bahwa primary key 'kd_penulis' tidak auto-increment (sebenarnya sudah autoIncrement di migrasi, tapi ini untuk berjaga-jaga)
    public $incrementing = true;

    // Tipe data primary key
    protected $keyType = 'integer';

    // Menyatakan bahwa model tidak menggunakan timestamps 'created_at' dan 'updated_at' (jika tidak ada di tabel, tapi sepertinya ada di skema migrasi)
    public $timestamps = true;
}
