<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    // Nama tabel dalam database
    protected $table = 'buku';

    // Primary key
    protected $primaryKey = 'no_buku';
    // Kolom yang bisa diisi
    protected $fillable = [
        'judul',
        'edisi',
        'no_rak',
        'tahun',
        'penerbit',
        'kd_penulis',
    ];
}
