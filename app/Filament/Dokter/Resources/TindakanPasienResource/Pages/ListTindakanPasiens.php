<?php

namespace App\Filament\Dokter\Resources\TindakanPasienResource\Pages;

use App\Filament\Dokter\Resources\TindakanPasienResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTindakanPasiens extends ListRecords
{
    protected static string $resource = TindakanPasienResource::class;

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
