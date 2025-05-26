<?php

namespace App\Filament\Perawat\Resources\VitalSignResource\Pages;

use App\Filament\Perawat\Resources\VitalSignResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVitalSign extends EditRecord
{
    protected static string $resource = VitalSignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
