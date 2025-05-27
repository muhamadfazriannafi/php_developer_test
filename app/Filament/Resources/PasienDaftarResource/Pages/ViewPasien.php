<?php

namespace App\Filament\Resources\PasienDaftarResource\Pages;

use App\Filament\Resources\PasienDaftarResource;
use Filament\Resources\Pages\ViewRecord;

class ViewPasien extends ViewRecord
{
    protected static string $resource = PasienDaftarResource::class;
    protected static string $view = 'filament.resources.hasil-pemeriksaan.pages.view-hasil-pemeriksaan';
}
