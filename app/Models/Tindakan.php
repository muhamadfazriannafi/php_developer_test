<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tindakan extends Model
{
    protected $table = 'tindakan_t';
    protected $fillable = [
        'keluhan',
        'tanggal',
        'hasil_diagnosa',
        'pasien_daftar_id',
    ];

    // relationships
    public function pasienDaftar(): BelongsTo
    {
        return $this->belongsTo(PasienDaftar::class, 'pasien_daftar_id');
    }
}
