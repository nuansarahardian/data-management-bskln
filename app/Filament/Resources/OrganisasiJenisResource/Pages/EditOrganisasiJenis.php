<?php

namespace App\Filament\Resources\OrganisasiJenisResource\Pages;

use App\Filament\Resources\OrganisasiJenisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrganisasiJenis extends EditRecord
{
    protected static string $resource = OrganisasiJenisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
