<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvestasiResource\Pages;
use App\Models\Investasi;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\NumberInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class InvestasiResource extends Resource
{
    protected static ?string $model = Investasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationLabel = 'Investasi';

    protected static ?string $navigationGroup = 'Data Investasi';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('Kode_Alpha3_Asal')
                    ->label('Kode Alpha-3 Asal')
                    ->required()
                    ->maxLength(3),
                TextInput::make('Provinsi_Asal')
                    ->label('Provinsi Asal')
                    ->required()
                    ->maxLength(255),
                TextInput::make('Kota_Asal')
                    ->label('Kota Asal')
                    ->required()
                    ->maxLength(255),
                TextInput::make('Kode_Alpha3_Tujuan')
                    ->label('Kode Alpha-3 Tujuan')
                    ->required()
                    ->maxLength(3),
                TextInput::make('Nama_Perusahaan')
                    ->label('Nama Perusahaan')
                    ->required()
                    ->maxLength(255),
                TextInput::make('Tipe_Investasi')
                    ->label('Tipe Investasi')
                    ->required()
                    ->maxLength(50),
                NumberInput::make('Bulan')
                    ->label('Bulan')
                    ->required()
                    ->min(1)
                    ->max(12),
                NumberInput::make('Tahun')
                    ->label('Tahun')
                    ->required()
                    ->min(1900)
                    ->max(2100),
                TextInput::make('ID_Sektor')
                    ->label('ID Sektor')
                    ->required(),
                NumberInput::make('Nilai_Investasi')
                    ->label('Nilai Investasi')
                    ->required(),
                NumberInput::make('Nilai_Projek')
                    ->label('Nilai Projek')
                    ->required(),
                TextInput::make('KodeSumber')
                    ->label('Kode Sumber')
                    ->required()
                    ->maxLength(50),
                Select::make('Status')
                    ->label('Status')
                    ->options([
                        'Aktif' => 'Aktif',
                        'Nonaktif' => 'Nonaktif',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('ID')
                    ->label('ID')
                    ->sortable(),
                TextColumn::make('Kode_Alpha3_Asal')
                    ->label('Kode Alpha-3 Asal')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Provinsi_Asal')
                    ->label('Provinsi Asal')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Kota_Asal')
                    ->label('Kota Asal')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Kode_Alpha3_Tujuan')
                    ->label('Kode Alpha-3 Tujuan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Nama_Perusahaan')
                    ->label('Nama Perusahaan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Tipe_Investasi')
                    ->label('Tipe Investasi')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Nilai_Investasi')
                    ->label('Nilai Investasi')
                    ->sortable(),
                TextColumn::make('Status')
                    ->label('Status')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Tambahkan relasi jika diperlukan
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInvestasis::route('/'),
            'create' => Pages\CreateInvestasi::route('/create'),
            'edit' => Pages\EditInvestasi::route('/{record}/edit'),
        ];
    }
}
