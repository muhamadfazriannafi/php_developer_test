<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VitalSign extends Model
{
    use HasFactory;
    protected $table = 'vital_sign_t';

    protected $fillable = [
        'pasien_daftar_id',
        'tanggal',
        'tekanan_darah',
        'berat_badan',
    ];

    public function pasienDaftar(): BelongsTo
    {
        return $this->belongsTo(PasienDaftar::class, 'pasien_daftar_id', 'id');
    }
}
