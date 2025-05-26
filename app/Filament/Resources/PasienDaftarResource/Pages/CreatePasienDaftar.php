<?php

namespace App\Filament\Resources\PasienDaftarResource\Pages;

use App\Filament\Resources\PasienDaftarResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePasienDaftar extends CreateRecord
{
    protected static string $resource = PasienDaftarResource::class;
    
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
