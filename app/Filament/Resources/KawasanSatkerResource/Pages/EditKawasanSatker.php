<?php

namespace App\Filament\Resources\KawasanSatkerResource\Pages;

use App\Filament\Resources\KawasanSatkerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKawasanSatker extends EditRecord
{
    protected static string $resource = KawasanSatkerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
