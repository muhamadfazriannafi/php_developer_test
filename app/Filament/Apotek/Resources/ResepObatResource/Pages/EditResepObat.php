<?php

namespace App\Filament\Apotek\Resources\ResepObatResource\Pages;

use App\Filament\Apotek\Resources\ResepObatResource;
use App\Models\Obat;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResepObat extends EditRecord
{
    protected static string $resource = ResepObatResource::class;
 protected function mutateFormDataBeforeSave(array $data): array
    {
        $oldResep = $this->record;

        $oldObatId = $oldResep->obat_id;
        $oldJumlah = $oldResep->jumlah;

        // 1. Kembalikan stok dari data lama
        $oldObat = Obat::find($oldObatId);
        if ($oldObat) {
            $oldObat->stok += $oldJumlah;
            $oldObat->save();
        }

        // 2. Kurangi stok dari data baru
        $newObat = Obat::find($data['obat_id']);
        if ($newObat && $newObat->stok >= $data['jumlah']) {
            $newObat->stok -= $data['jumlah'];
            $newObat->save();
        } else {
            throw new \Exception('Stok tidak cukup untuk obat yang dipilih.');
        }

        return $data;
    }
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
