<?php

namespace App\Filament\Resources\PasienDaftarResource\Pages;

use App\Filament\Resources\PasienDaftarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPasienDaftar extends EditRecord
{
    protected static string $resource = PasienDaftarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
