<?php

namespace App\Filament\Apotek\Resources;

use App\Filament\Apotek\Resources\ResepObatResource\Pages;
use App\Filament\Apotek\Resources\ResepObatResource\RelationManagers;
use App\Models\Obat;
use App\Models\ResepObat;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResepObatResource extends Resource
{
    protected static ?string $model = ResepObat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('no_resep')
                ->label('No Resep')
                ->required(),
                Select::make('pasien_daftar_id')
                ->label('Pasien Daftar')
                ->options(\App\Models\PasienDaftar::all()->pluck('pasien.nama', 'id'))
                ->searchable()
                ->required(),
                DatePicker::make('tanggal')
                ->label('Tanggal Resep')
                ->required(),
                Select::make('obat_id')
                ->label('Obat')
                ->options(\App\Models\Obat::all()->pluck('nama_obat', 'id'))
                ->searchable()
                ->required()
                ->reactive(),

                Placeholder::make('stok_obat')
                ->label('Stok Tersedia')
                ->content(function (callable $get) {
                    $obat = Obat::find($get('obat_id'));
                    return $obat ? "{$obat->stok} unit tersedia" : 'Pilih obat untuk melihat stok';
                }),

                TextInput::make('jumlah')
                ->label('Jumlah Obat')
                ->numeric()
                ->required(),
                TextInput::make('aturan_pakai')
                ->label('Aturan Pakai')
                ->required(),
                TextInput::make('keterangan')
                ->label('Keterangan')
                ->nullable(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_resep')
                    ->label('No Resep')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pasienDaftar.pasien.nama')
                    ->label('Nama Pasien')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Tanggal Resep')
                    ->date(),
                Tables\Columns\TextColumn::make('obat.nama_obat')
                    ->label('Obat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->label('Jumlah Obat'),
                Tables\Columns\TextColumn::make('aturan_pakai')
                    ->label('Aturan Pakai'),
                Tables\Columns\TextColumn::make('keterangan')
                    ->label('Keterangan'),
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
            'index' => Pages\ListResepObats::route('/'),
            'create' => Pages\CreateResepObat::route('/create'),
            'edit' => Pages\EditResepObat::route('/{record}/edit'),
        ];
    }
}
