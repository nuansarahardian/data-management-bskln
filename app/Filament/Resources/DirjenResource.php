<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DirjenResource\Pages;
use App\Models\Dirjen;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DirjenResource extends Resource
{
    protected static ?string $model = Dirjen::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static ?string $navigationLabel = 'Direktorat Jenderal';

    protected static ?string $navigationGroup = 'Data Master';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('ID_Dirjen')
                    ->label('ID Direktorat Jenderal')
                    ->required()
                    ->maxLength(10),
                TextInput::make('Nama_Dirjen')
                    ->label('Nama Direktorat Jenderal')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('ID_Dirjen')
                    ->label('ID Direktorat Jenderal')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Nama_Dirjen')
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
            // Tambahkan relasi jika diperlukan
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDirjens::route('/'),
            'create' => Pages\CreateDirjen::route('/create'),
            'edit' => Pages\EditDirjen::route('/{record}/edit'),
        ];
    }
}
