<?php

namespace App\Filament\Superadmin\Resources\HasilPemeriksaanResource\Pages;

use App\Filament\Superadmin\Resources\HasilPemeriksaanResource;
use Filament\Actions;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Infolists\InfolistsServiceProvider;
use Filament\Resources\Pages\ViewRecord;

class ViewHasilPemeriksaan extends ViewRecord
{
    protected static string $resource = HasilPemeriksaanResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\EditAction::make(),
    //     ];
    // // }
    // public static function infolist(InfolistsServiceProvider $infolist): Infolist
    // {
    //     return $infolist
    //         ->schema([
    //             TextEntry::make('name'),
    //             TextEntry::make('email'),
    //             TextEntry::make('notes')
    //                 ->columnSpanFull(),
    //         ]);
    // }
}
