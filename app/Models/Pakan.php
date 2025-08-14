<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pakan extends Model
{
    protected $table = 'pakan'; // ← supaya Laravel tidak mencari pakans
    protected $fillable = ['nama_pakan', 'stok_kg', 'harga_per_kg'];
}
