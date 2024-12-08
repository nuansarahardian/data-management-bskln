<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganisasiJenisResource\Pages;
use App\Models\OrganisasiJenis;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class OrganisasiJenisResource extends Resource
{
    protected static ?string $model = OrganisasiJenis::class;

    // protected static ?string $navigationIcon = 'heroicon-o-w';

    protected static ?string $navigationLabel = 'Organisasi Jenis';

    protected static ?string $navigationGroup = 'Data Master';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('ID_Org')
                    ->label('ID Organisasi')
                    ->required()
                    ->maxLength(10),
                TextInput::make('Abbreviation')
                    ->label('Singkatan')
                    ->required()
                    ->maxLength(10),
                TextInput::make('Organization')
                    ->label('Nama Organisasi')
                    ->required()
                    ->maxLength(255),
                TextInput::make('Category')
                    ->label('Kategori')
                    ->required()
                    ->maxLength(50),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('ID_Org')
                    ->label('ID Organisasi')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Abbreviation')
                    ->label('Singkatan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Organization')
                    ->label('Nama Organisasi')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Category')
                    ->label('Kategori')
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
            'index' => Pages\ListOrganisasiJenis::route('/'),
            'create' => Pages\CreateOrganisasiJenis::route('/create'),
            'edit' => Pages\EditOrganisasiJenis::route('/{record}/edit'),
        ];
    }
}
