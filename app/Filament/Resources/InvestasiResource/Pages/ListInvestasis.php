<?php

namespace App\Filament\Resources\InvestasiResource\Pages;

use App\Filament\Resources\InvestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInvestasis extends ListRecords
{
    protected static string $resource = InvestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
