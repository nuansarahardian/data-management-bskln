<?php

namespace App\Filament\Resources\DirjenResource\Pages;

use App\Filament\Resources\DirjenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDirjen extends EditRecord
{
    protected static string $resource = DirjenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
