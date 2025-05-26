<?php

namespace App\Filament\Dokter\Resources\TindakanPasienResource\Pages;

use App\Filament\Dokter\Resources\TindakanPasienResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTindakanPasien extends CreateRecord
{
    protected static string $resource = TindakanPasienResource::class;
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
