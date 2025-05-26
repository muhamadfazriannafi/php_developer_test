<?php

namespace App\Filament\Superadmin\Resources;

use App\Filament\Superadmin\Resources\HasilPemeriksaanResource\Pages;
use App\Filament\Superadmin\Resources\HasilPemeriksaanResource\RelationManagers;
use App\Models\HasilPemeriksaan;
use App\Models\PasienDaftar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HasilPemeriksaanResource extends Resource
{
    protected static ?string $model = PasienDaftar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHasilPemeriksaans::route('/'),
            'create' => Pages\CreateHasilPemeriksaan::route('/create'),
            'view' => Pages\ViewHasilPemeriksaan::route('/{record}'),
            'edit' => Pages\EditHasilPemeriksaan::route('/{record}/edit'),
        ];
    }
}
