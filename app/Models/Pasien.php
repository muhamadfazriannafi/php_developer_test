<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien_m';
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin_id',
        'nomor_hape',
    ];
    // relationships
    public function pasienDaftar(): HasOne
    {
        return $this->hasOne(PasienDaftar::class, 'pasien_id');
    }
}
