<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResepObat extends Model
{
    protected $table = 'resep_obat_t';
    protected $fillable = [
        'pasien_daftar_id',
        'obat_id',
        'jumlah',
        'aturan_pakai',
        'tanggal',
        'no_resep',
        'keterangan',
    ];

    // relationships
    public function pasienDaftar(): BelongsTo
    {
        return $this->belongsTo(PasienDaftar::class, 'pasien_daftar_id');
    }

    public function obat(): BelongsTo
    {
        return $this->belongsTo(Obat::class, 'obat_id');
    }
}
