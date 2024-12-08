<?php

namespace App\Filament\Resources\DirjenResource\Pages;

use App\Filament\Resources\DirjenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDirjens extends ListRecords
{
    protected static string $resource = DirjenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
