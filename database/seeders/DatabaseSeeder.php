<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ternak;
use App\Models\Pakan;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Ternak::create([
            'kode_ternak' => 'T001',
            'jenis' => 'Kambing',
            'ras' => 'Etawa',
            'umur' => 4,
            'berat' => 30.5,
            'status_kesehatan' => 'Sehat',
            'status_reproduksi' => 'Belum Kawin',
        ]);

        Ternak::create([
            'kode_ternak' => 'T002',
            'jenis' => 'Sapi',
            'ras' => 'Simental',
            'umur' => 12,
            'berat' => 250.0,
            'status_kesehatan' => 'Sakit',
            'status_reproduksi' => 'Sedang Hamil',
        ]);

        Pakan::create([
            'nama_pakan' => 'Rumput Segar',
            'stok_kg' => 70,
            'harga_per_kg' => 1500,
        ]);
    }
}
