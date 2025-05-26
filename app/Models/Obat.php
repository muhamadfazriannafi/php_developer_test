<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat_m';
    protected $fillable = [
        'nama_obat',
        'harga_satuan',
        'stok',
    ];
}
