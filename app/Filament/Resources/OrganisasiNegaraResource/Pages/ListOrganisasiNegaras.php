<?php

namespace App\Filament\Resources\OrganisasiNegaraResource\Pages;

use App\Filament\Resources\OrganisasiNegaraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrganisasiNegaras extends ListRecords
{
    protected static string $resource = OrganisasiNegaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
