<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KawasanSatkerResource\Pages;
use App\Models\KawasanSatker;
use App\Models\Dirjen;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KawasanSatkerResource extends Resource
{
    protected static ?string $model = KawasanSatker::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    protected static ?string $navigationLabel = 'Kawasan Satker';

    protected static ?string $navigationGroup = 'Data Geografis';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('ID_Wil_Kemlu')
                    ->label('ID Wilayah Kemlu')
                    ->required()
                    ->maxLength(10),
                TextInput::make('Nama_Wil_Kemlu')
                    ->label('Nama Wilayah Kemlu')
                    ->required()
                    ->maxLength(255),
                Select::make('ID_Dirjen')
                    ->label('Direktorat Jenderal')
                    ->required()
                    ->options(function () {
                        return Dirjen::pluck('Nama_Dirjen', 'ID_Dirjen')->toArray();
                    })
                    ->searchable()
                    ->placeholder('Pilih Direktorat Jenderal'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('ID_Wil_Kemlu')
                    ->label('ID Wilayah Kemlu')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Nama_Wil_Kemlu')
                    ->label('Nama Wilayah Kemlu')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('dirjen.Nama_Dirjen')
                    ->label('Nama Direktorat Jenderal')
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
            // Tambahkan relasi jika ada
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKawasanSatkers::route('/'),
            'create' => Pages\CreateKawasanSatker::route('/create'),
            'edit' => Pages\EditKawasanSatker::route('/{record}/edit'),
        ];
    }
}
