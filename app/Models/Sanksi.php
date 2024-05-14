<?php

namespace App\Models;

use App\Http\Controllers\PeminjamanController;
use Illuminate\Database\Eloquent\Model;

class Sanksi extends Model
{
    protected $table = 'sanksi';
    protected $primaryKey = 'id_sanksi';
    public $timestamps = false;

    protected $fillable = [
        'id_anggota',
        'id_peminjaman',
        'jumlah_denda',
        'status'
    ];

    // Relasi ke model Anggota
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }

    // Relasi ke model Peminjaman
    public function peminjaman()
    {
        return $this->belongsTo(PeminjamanController::class, 'id_peminjaman');
    }
}
