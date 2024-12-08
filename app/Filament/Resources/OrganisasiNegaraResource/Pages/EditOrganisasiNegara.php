<?php

namespace App\Filament\Resources\OrganisasiNegaraResource\Pages;

use App\Filament\Resources\OrganisasiNegaraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrganisasiNegara extends EditRecord
{
    protected static string $resource = OrganisasiNegaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
