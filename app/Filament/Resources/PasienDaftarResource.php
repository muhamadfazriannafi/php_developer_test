<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PasienDaftarResource\Pages;
use App\Filament\Resources\PasienDaftarResource\RelationManagers;
use App\Models\Pasien;
use App\Models\PasienDaftar;
use App\Models\Tindakan;
use App\Models\VitalSign;
use App\Models\ResepObat;
use App\Models\Obat;


use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PasienDaftarResource extends Resource
{
    protected static ?string $model = PasienDaftar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('pasien_id')
                    ->label('Pasien')
                    ->options(Pasien::all()->pluck('nama', 'id'))
                    ->searchable(),
                DatePicker::make('tanggal_daftar')
                    ->label('Tanggal Daftar'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tanggal_daftar')
                    ->label('Tanggal Daftar')
                    ->date()
                    ->sortable(),
                TextColumn::make('pasien.nama')
                    ->label('Nama Pasien')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make()
                    ->label('Lihat Hasil Pemeriksaan')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPasienDaftars::route('/'),
            'create' => Pages\CreatePasienDaftar::route('/create'),
            'edit' => Pages\EditPasienDaftar::route('/{record}/edit'),
            'view' => Pages\ViewPasien::route('/{record}'),
        ];
    }
}
