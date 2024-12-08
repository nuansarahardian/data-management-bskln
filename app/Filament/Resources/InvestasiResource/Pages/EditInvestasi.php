<?php

namespace App\Filament\Resources\InvestasiResource\Pages;

use App\Filament\Resources\InvestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInvestasi extends EditRecord
{
    protected static string $resource = InvestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
