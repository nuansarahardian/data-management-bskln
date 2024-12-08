<?php

namespace App\Filament\Resources\CustomNotificationResource\Pages;

use App\Filament\Resources\CustomNotificationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomNotifications extends ListRecords
{
    protected static string $resource = CustomNotificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
