<?php

namespace App\Filament\Resources\KawasanResource\Pages;

use App\Filament\Resources\KawasanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKawasan extends EditRecord
{
    protected static string $resource = KawasanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
