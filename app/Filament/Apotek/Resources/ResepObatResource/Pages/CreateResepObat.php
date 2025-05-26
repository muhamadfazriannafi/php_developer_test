<?php

namespace App\Filament\Apotek\Resources\ResepObatResource\Pages;

use App\Filament\Apotek\Resources\ResepObatResource;
use App\Models\Obat;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateResepObat extends CreateRecord
{
    protected static string $resource = ResepObatResource::class;
    
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Kurangi stok obat sesuai jumlah yang diinput
        $obat = Obat::find($data['obat_id']);

        if ($obat && $obat->stok >= $data['jumlah']) {
            $obat->stok -= $data['jumlah'];
            $obat->save();
        } else {
            throw new \Exception('Stok tidak cukup untuk obat yang dipilih.');
        }

        return $data;
    }
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
