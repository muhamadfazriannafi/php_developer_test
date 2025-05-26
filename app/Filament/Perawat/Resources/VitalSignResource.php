<?php

namespace App\Filament\Perawat\Resources;

use App\Filament\Perawat\Resources\VitalSignResource\Pages;
use App\Filament\Perawat\Resources\VitalSignResource\RelationManagers;
use App\Models\VitalSign;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VitalSignResource extends Resource
{
    protected static ?string $model = VitalSign::class;

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
                TextInput::make('tekanan_darah')
                    ->label('Tekanan Darah'),
                TextInput::make('berat_badan')
                    ->label('Berat Badan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tanggal')
                    ->label('Tanggal Pelayanan')
                    ->date()
                    ->sortable(),
                TextColumn::make('pasienDaftar.pasien.nama')
                    ->label('Nama Pasien')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tekanan_darah')
                    ->label('Tekanan Darah'),
                TextColumn::make('berat_badan')
                    ->label('Berat Badan')
                    ->sortable(),
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
            'index' => Pages\ListVitalSigns::route('/'),
            'create' => Pages\CreateVitalSign::route('/create'),
            'edit' => Pages\EditVitalSign::route('/{record}/edit'),
        ];
    }
}
