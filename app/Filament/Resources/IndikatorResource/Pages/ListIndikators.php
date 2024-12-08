<?php

namespace App\Filament\Resources\IndikatorResource\Pages;

use App\Filament\Resources\IndikatorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndikators extends ListRecords
{
    protected static string $resource = IndikatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
