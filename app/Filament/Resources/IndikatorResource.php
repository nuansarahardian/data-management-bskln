<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IndikatorResource\Pages;
use App\Models\Indikator;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class IndikatorResource extends Resource
{
    protected static ?string $model = Indikator::class;

    // protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';

    protected static ?string $navigationLabel = 'Indikator';

    protected static ?string $navigationGroup = 'Data Master';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('Indikator')
                    ->label('Nama Indikator')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('ID_Indikator')
                    ->label('ID Indikator')
                    ->sortable(),
                TextColumn::make('Indikator')
                    ->label('Nama Indikator')
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
            'index' => Pages\ListIndikators::route('/'),
            'create' => Pages\CreateIndikator::route('/create'),
            'edit' => Pages\EditIndikator::route('/{record}/edit'),
        ];
    }
}
