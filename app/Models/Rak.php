<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    
    protected $table = 'rak'; // Sesuaikan dengan nama tabel Anda jika berbeda
    protected $primaryKey = 'kd_rak';
    protected $fillable = ['lokasi'];
}
