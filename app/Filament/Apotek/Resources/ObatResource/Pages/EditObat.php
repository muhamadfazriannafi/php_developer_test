<?php

namespace App\Filament\Apotek\Resources\ObatResource\Pages;

use App\Filament\Apotek\Resources\ObatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditObat extends EditRecord
{
    protected static string $resource = ObatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
