<?php

namespace App\Filament\Resources\BenuaResource\Pages;

use App\Filament\Resources\BenuaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBenuas extends ListRecords
{
    protected static string $resource = BenuaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
