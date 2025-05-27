<?php

namespace App\Filament\Resources\RiwayatPasienResource\Pages;

use App\Filament\Resources\RiwayatPasienResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRiwayatPasien extends EditRecord
{
    protected static string $resource = RiwayatPasienResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
