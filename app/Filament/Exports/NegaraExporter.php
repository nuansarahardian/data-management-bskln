<?php

namespace App\Filament\Exports;

use App\Models\Negara;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class NegaraExporter extends Exporter
{
    protected static ?string $model = Negara::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('No'),
            ExportColumn::make('Kode_Angka'),
            ExportColumn::make('Kode_Alpha3'),
            ExportColumn::make('Kode_Alpha2'),
            ExportColumn::make('Negara_IDN'),
            ExportColumn::make('Negara_ENG'),
            ExportColumn::make('ID_Wil'),
            ExportColumn::make('ID_WIl_Kemlu'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your negara export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
