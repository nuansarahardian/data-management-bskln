<?php

namespace App\Filament\Resources\BenuaResource\Pages;

use App\Filament\Resources\BenuaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBenua extends EditRecord
{
    protected static string $resource = BenuaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
