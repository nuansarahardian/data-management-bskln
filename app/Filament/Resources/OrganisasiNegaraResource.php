<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganisasiNegaraResource\Pages;
use App\Models\OrganisasiNegara;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class OrganisasiNegaraResource extends Resource
{
    protected static ?string $model = OrganisasiNegara::class;

    // protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?string $navigationLabel = 'Organisasi Negara';

    protected static ?string $navigationGroup = 'Organisasi';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('Kode_Alpha3')
                    ->label('Kode Alpha-3')
                    ->required()
                    ->maxLength(3),
                TextInput::make('ID_Org')
                    ->label('ID Organisasi')
                    ->required()
                    ->numeric(),
                TextInput::make('KodePmk')
                    ->label('Kode PMK')
                    ->required()
                    ->maxLength(10),
                DateTimePicker::make('Created')
                    ->label('Tanggal Dibuat')
                    ->default(now()),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('ID')
                    ->label('ID')
                    ->sortable(),
                TextColumn::make('Kode_Alpha3')
                    ->label('Kode Alpha-3')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('ID_Org')
                    ->label('ID Organisasi')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('KodePmk')
                    ->label('Kode PMK')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Created')
                    ->label('Tanggal Dibuat')
                    ->sortable(),
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
            'index' => Pages\ListOrganisasiNegaras::route('/'),
            'create' => Pages\CreateOrganisasiNegara::route('/create'),
            'edit' => Pages\EditOrganisasiNegara::route('/{record}/edit'),
        ];
    }
}
