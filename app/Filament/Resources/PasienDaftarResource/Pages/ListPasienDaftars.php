<?php

namespace App\Filament\Resources\PasienDaftarResource\Pages;

use App\Filament\Resources\PasienDaftarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPasienDaftars extends ListRecords
{
    protected static string $resource = PasienDaftarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
