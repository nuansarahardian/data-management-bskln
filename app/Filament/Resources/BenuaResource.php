<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BenuaResource\Pages;
use App\Filament\Resources\BenuaResource\RelationManagers;
use App\Models\Benua;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BenuaResource extends Resource
{
    protected static ?string $model = Benua::class;

    // protected static ?string $navigationIcon = 'heroicon-o-globe';

    protected static ?string $navigationLabel = 'Benua';
    protected static ?string $pluralLabel = 'Benua';
    protected static ?string $navigationGroup = 'Data Geografis';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('ID_Benua')
                    ->label('ID Benua')
                    ->required()
                    ->maxLength(10)
                    ->unique(Benua::class, 'ID_Benua'),
                TextInput::make('Benua')
                    ->label('Nama Benua')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ID_Benua')
                    ->label('ID Benua')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Benua')
                    ->label('Nama Benua')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBenuas::route('/'),
            'create' => Pages\CreateBenua::route('/create'),
            'edit' => Pages\EditBenua::route('/{record}/edit'),
        ];
    }
}
