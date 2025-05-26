<?php

namespace App\Filament\Superadmin\Resources\HasilPemeriksaanResource\Pages;

use App\Filament\Superadmin\Resources\HasilPemeriksaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHasilPemeriksaan extends EditRecord
{
    protected static string $resource = HasilPemeriksaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
