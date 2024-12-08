<?php

namespace App\Filament\Resources\KawasanResource\Pages;

use App\Filament\Resources\KawasanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKawasans extends ListRecords
{
    protected static string $resource = KawasanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
