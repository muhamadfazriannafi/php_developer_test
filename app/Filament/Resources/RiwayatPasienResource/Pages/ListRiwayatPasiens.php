<?php

namespace App\Filament\Resources\RiwayatPasienResource\Pages;

use App\Filament\Resources\RiwayatPasienResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRiwayatPasiens extends ListRecords
{
    protected static string $resource = RiwayatPasienResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
