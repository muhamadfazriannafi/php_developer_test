<?php

namespace App\Filament\Perawat\Resources\VitalSignResource\Pages;

use App\Filament\Perawat\Resources\VitalSignResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVitalSign extends CreateRecord
{
    protected static string $resource = VitalSignResource::class;
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
