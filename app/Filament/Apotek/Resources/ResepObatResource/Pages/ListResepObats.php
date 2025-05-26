<?php

namespace App\Filament\Apotek\Resources\ResepObatResource\Pages;

use App\Filament\Apotek\Resources\ResepObatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResepObats extends ListRecords
{
    protected static string $resource = ResepObatResource::class;

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
