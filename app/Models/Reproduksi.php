<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reproduksi extends Model
{
    protected $table = 'reproduksi'; // pastikan sama persis dengan nama tabel di DB

    protected $fillable = [
        'id_ternak',
        'tanggal',
        'status',
        'keterangan'
    ];

    public function ternak()
    {
        return $this->belongsTo(Ternak::class, 'id_ternak');
    }
}
