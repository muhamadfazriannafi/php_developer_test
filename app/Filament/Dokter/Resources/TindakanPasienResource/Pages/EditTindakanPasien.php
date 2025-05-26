<?php

namespace App\Filament\Dokter\Resources\TindakanPasienResource\Pages;

use App\Filament\Dokter\Resources\TindakanPasienResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTindakanPasien extends EditRecord
{
    protected static string $resource = TindakanPasienResource::class;

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
