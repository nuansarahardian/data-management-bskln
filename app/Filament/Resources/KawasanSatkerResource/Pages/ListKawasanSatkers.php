<?php

namespace App\Filament\Resources\KawasanSatkerResource\Pages;

use App\Filament\Resources\KawasanSatkerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKawasanSatkers extends ListRecords
{
    protected static string $resource = KawasanSatkerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
