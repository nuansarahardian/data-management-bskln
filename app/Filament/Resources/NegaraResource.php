<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NegaraResource\Pages;
use App\Filament\Resources\NegaraResource\RelationManagers;
use App\Models\Negara;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Actions\ImportAction;

use App\Filament\Exports\NegaraExporter;
use Filament\Tables\Actions\ExportAction;
use App\Filament\Imports\NegaraImporter;
use App\Models\Kawasan;
use App\Models\KawasanSatker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NegaraResource extends Resource
{
    protected static ?string $model = Negara::class;
    protected static ?string $navigationGroup = 'Data Geografis';
    protected static ?string $navigationIcon = 'heroicon-o-flag';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('Kode_Angka')
                    ->label('Kode Angka')
                    ->numeric()
                    ->required(),
                TextInput::make('Kode_Alpha3')
                    ->label('Kode Alpha-3')
                    ->maxLength(3)
                    ->required(),
                TextInput::make('Kode_Alpha2')
                    ->label('Kode Alpha-2')
                    ->maxLength(2)
                    ->required(),
                TextInput::make('Negara_IDN')
                    ->label('Nama Negara (IDN)')
                    ->required()
                    ->maxLength(255),
                TextInput::make('Negara_ENG')
                    ->label('Nama Negara (ENG)')
                    ->required()
                    ->maxLength(255),
                Select::make('ID_Wil')
                    ->label('ID Wilayah')
                    ->options(Kawasan::pluck('ID_Wil', 'ID_Wil'))
                    ->required()
                    ->searchable()
                    ->placeholder(''),
                Select::make('ID_WIl_Kemlu')
                    ->label('ID Wilayah Kemlu')
                    ->options(KawasanSatker::pluck('ID_WIl_Kemlu', 'ID_WIl_Kemlu'))
                    ->required()
                    ->searchable()
                    ->placeholder(''),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('No')
                    ->label('No')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Kode_Angka')
                    ->label('Kode Angka')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Kode_Alpha3')
                    ->label('Kode Alpha-3')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Kode_Alpha2')
                    ->label('Kode Alpha-2')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Negara_IDN')
                    ->label('Nama Negara (IDN)')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('Negara_ENG')
                    ->label('Nama Negara (ENG)')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('ID_Wil')
                    ->label('ID Wilayah')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('ID_WIl_Kemlu')
                    ->label('ID Wilayah Kemlu')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                // Filter untuk kode angka
                Tables\Filters\Filter::make('Kode Angka')
                    ->query(fn ($query, $value) => $query->where('Kode_Angka', $value)),
    
                // Filter untuk kode alpha-3 (Select Filter)
                Tables\Filters\SelectFilter::make('Kode Alpha-3')
                    ->options(fn () => Negara::pluck('Kode_Alpha3', 'Kode_Alpha3')->toArray())
                    ->label('Kode Alpha-3'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->headerActions([
                ExportAction::make()
                ->exporter(NegaraExporter::class),
                ImportAction::make()
    ->importer(NegaraImporter::class)
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
            'index' => Pages\ListNegaras::route('/'),
            'create' => Pages\CreateNegara::route('/create'),
            'edit' => Pages\EditNegara::route('/{record}/edit'),
        ];
    }
}
