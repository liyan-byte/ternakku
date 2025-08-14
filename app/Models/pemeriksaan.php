<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;

    // Pakai nama tabel yang sesuai di database
    protected $table = 'kesehatan';

    // Kolom yang bisa diisi mass assignment
    protected $fillable = [
        'id_ternak',
        'tanggal',
        'jenis_pemeriksaan',
        'diagnosa',
        'tindakan',
    ];
}
