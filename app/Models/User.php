<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser, MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'pendaftaran') {
            return str_ends_with($this->email, '@pendaftaran.com');
        }

        if ($panel->getId() === 'perawat') {
            return str_ends_with($this->email, '@perawat.com');
        }
        
        if ($panel->getId() === 'dokter') {
            return str_ends_with($this->email, '@dokter.com');
        }
        if ($panel->getId() === 'superadmin') {
            return str_ends_with($this->email, '@superadmin.com');
        }
        
        if ($panel->getId() === 'apotek') {
            return str_ends_with($this->email, '@apoteker.com');
        }

        // return str_ends_with($this->email, '@pendaftaran.com') && $this->hasVerifiedEmail();
        // return str_ends_with($this->email, '@pendaftaran.com') && $this->hasVerifiedEmail();
    }

    

}
