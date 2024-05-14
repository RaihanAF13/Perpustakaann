<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rak;

class LokasiRakSeeder extends Seeder
{
    public function run()
    {
        $lokasi_rak = [
            ['lokasi_rak' => 'Rak A'],
            ['lokasi_rak' => 'Rak B'],
            ['lokasi_rak' => 'Rak C'],
            // Tambahkan data lokasi rak sesuai kebutuhan Anda
        ];

        Rak::insert($lokasi_rak);
    }
}
