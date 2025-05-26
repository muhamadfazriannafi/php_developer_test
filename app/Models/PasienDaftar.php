<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PasienDaftar extends Model
{

    protected $table = 'pasien_daftar_t';
    protected $fillable = [
        'pasien_id',
        'tanggal_daftar',
    ];    

    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }
}
