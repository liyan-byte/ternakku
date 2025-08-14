<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ternak extends Model
{
    protected $table = 'ternak';

    protected $fillable = [
        'kode_ternak',
        'jenis',
        'ras',
        'umur',
        'berat',
        'status_kesehatan',
        'status_reproduksi'
    ];

    public function kesehatan()
    {
        return $this->hasMany(Kesehatan::class, 'id_ternak');
    }

    public function reproduksi()
    {
        return $this->hasMany(Reproduksi::class, 'id_ternak');
    }

    public function jadwalPakan()
    {
        return $this->hasMany(JadwalPakan::class, 'id_ternak');
    }
}
