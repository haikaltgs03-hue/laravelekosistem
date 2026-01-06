<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ekosistem; 

class EkosistemSeeder extends Seeder
{
    public function run(): void
    {
        Ekosistem::create([
            'nama' => 'Hutan Hujan Tropis',
            'deskripsi' => 'Ekosistem dengan curah hujan tinggi',
            'lokasi' => 'Kalimantan'
        ]);
    }
}
