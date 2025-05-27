<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function tindakan(): HasMany
    {
        return $this->hasMany(Tindakan::class, 'pasien_daftar_id','id');
    }
    public function resepObat(): HasMany
    {
        return $this->hasMany(ResepObat::class, 'pasien_daftar_id','id');
    }
    public function vitalSign(): HasMany
    {
        return $this->hasMany(VitalSign::class, 'pasien_daftar_id','id');
    }
}
