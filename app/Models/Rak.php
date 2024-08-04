<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;
    protected $table = 'rak'; // Sesuaikan dengan nama tabel Anda jika berbeda
    protected $primaryKey = 'kd_rak';
    protected $fillable = ['lokasi'];
}
