<?php

namespace App\Filament\Imports;

use App\Models\Negara;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class NegaraImporter extends Importer
{
    protected static ?string $model = Negara::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('No')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('Kode_Angka')
                ->numeric()
                ->rules(['integer']),
        ImportColumn::make('Kode_Alpha3')
                ->rules(['max:3']),
            ImportColumn::make('Kode_Alpha2')
                ->rules(['max:2']),
            ImportColumn::make('Negara_IDN')
                ->rules(['max:150']),
            ImportColumn::make('Negara_ENG')
                ->rules(['max:150']),
            ImportColumn::make('ID_Wil')
                ->rules(['max:6']),
            ImportColumn::make('ID_WIl_Kemlu')
                ->rules(['max:6']),
        ];
    }

    public function resolveRecord(): ?Negara
    {
        // return Negara::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);

        return new Negara();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your negara import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
