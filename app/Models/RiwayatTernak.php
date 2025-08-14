<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatTernak extends Model
{
    protected $table = 'riwayat_ternak';
    protected $fillable = [
        'id_ternak',
        'tanggal',
        'jenis_riwayat',
        'keterangan'
    ];

    public function ternak()
    {
        return $this->belongsTo(Ternak::class);
    }
}
