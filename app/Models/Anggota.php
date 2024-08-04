<?php

namespace App\Models;

use App\Models\Peminjaman;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anggota extends Model
{

    use HasFactory;
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    protected $fillable = ['nama', 'no_hp', 'alamat', 'email'];

    public function peminjaman(): HasMany
    {
        return $this->hasMany(Peminjaman::class, 'id_anggota', 'id_anggota');
    }
}
