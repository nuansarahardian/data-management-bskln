<?php

namespace App\Filament\Resources\IndikatorResource\Pages;

use App\Filament\Resources\IndikatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndikator extends EditRecord
{
    protected static string $resource = IndikatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
