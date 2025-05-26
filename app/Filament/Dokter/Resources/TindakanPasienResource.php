<?php

namespace App\Filament\Dokter\Resources;

use App\Filament\Dokter\Resources\TindakanPasienResource\Pages;
use App\Filament\Dokter\Resources\TindakanPasienResource\RelationManagers;
use App\Models\Tindakan;
use App\Models\TindakanPasien;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TindakanPasienResource extends Resource
{
    protected static ?string $model = Tindakan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('tanggal')
                    ->label('Tanggal Pelayanan'),
                Select::make('pasien_daftar_id')
                    ->label('Pasien Daftar')
                    ->options(\App\Models\PasienDaftar::all()->pluck('pasien.nama', 'id'))
                    ->searchable()
                    ->required(),
                TextInput::make('keluhan')
                    ->label('Keluahan Pasien'),
                TextInput::make('hasil_diagnosa')
                    ->label('Diagnosa'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pasienDaftar.pasien.nama')
                    ->label('Nama Pasien')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Tanggal Pelayanan'),
                Tables\Columns\TextColumn::make('keluhan')
                    ->label('Keluhan Pasien'),
                Tables\Columns\TextColumn::make('hasil_diagnosa')
                    ->label('Diagnosa'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTindakanPasiens::route('/'),
            'create' => Pages\CreateTindakanPasien::route('/create'),
            'edit' => Pages\EditTindakanPasien::route('/{record}/edit'),
        ];
    }
}
