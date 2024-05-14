<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    protected $table = 'penulis';
    protected $primaryKey = 'kd_penulis';
    protected $fillable = ['nama_penulis', 'tempat_lahir', 'tanggal_lahir', 'email'];
}
