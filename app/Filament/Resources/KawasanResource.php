<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KawasanResource\Pages;
use App\Models\Kawasan;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;

class KawasanResource extends Resource
{
    protected static ?string $model = Kawasan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Kawasan';

    protected static ?string $navigationGroup = 'Data Master';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('Nama_Wil')
                    ->label('Nama Wilayah')
                    ->required()
                    ->maxLength(255),
                    Select::make('ID_Benua')
                    ->label('Benua')
                    ->required()
                    ->relationship('benua', 'Benua') // Gunakan relasi jika sudah didefinisikan di model
                    // ->searchable() // Tambahkan fitur pencarian jika diperlukan
                    ->placeholder('Pilih Benua'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('ID_Wil')
                    ->label('ID Wilayah')
                    ->sortable(),
                TextColumn::make('Nama_Wil')
                    ->label('Nama Wilayah')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('ID_Benua')
                    ->label('ID Benua'),
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
            'index' => Pages\ListKawasans::route('/'),
            'create' => Pages\CreateKawasan::route('/create'),
            'edit' => Pages\EditKawasan::route('/{record}/edit'),
        ];
    }
}
