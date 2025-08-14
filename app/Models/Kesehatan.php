<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kesehatan extends Model
{
    protected $table = 'kesehatan';

    protected $fillable = [
        'id_ternak',
        'tanggal',
        'jenis_pemeriksaan',
        'diagnosa',
        'tindakan'
    ];

    public function ternak()
    {
        return $this->belongsTo(Ternak::class, 'id_ternak');
    }
}
