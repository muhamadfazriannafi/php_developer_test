<?php

namespace App\Filament\Perawat\Resources\VitalSignResource\Pages;

use App\Filament\Perawat\Resources\VitalSignResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVitalSigns extends ListRecords
{
    protected static string $resource = VitalSignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
