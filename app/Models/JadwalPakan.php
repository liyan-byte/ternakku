<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalVaksin extends Model
{
    use HasFactory;

    protected $table = 'jadwal_vaksin'; // sesuaikan dengan nama tabel
    protected $fillable = ['tanggal', 'jenis_vaksin', 'keterangan'];
}
