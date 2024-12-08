<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomNotificationResource\Pages;
use App\Models\CustomNotification;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CustomNotificationResource extends Resource
{
    protected static ?string $model = CustomNotification::class;

    protected static ?string $navigationIcon = 'heroicon-o-bell';

    protected static ?string $navigationLabel = 'Custom Notifications';

    protected static ?string $navigationGroup = 'Notifications';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Judul')->required(),
                Textarea::make('message')->label('Pesan')->required(),
                DateTimePicker::make('notify_at')->label('Waktu Notifikasi')->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Judul')->sortable()->searchable(),
                TextColumn::make('message')->label('Pesan'),
                TextColumn::make('notify_at')->label('Waktu Notifikasi')->sortable(),
                BooleanColumn::make('is_sent')->label('Terkirim'),
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
            'index' => Pages\ListCustomNotifications::route('/'),
            'create' => Pages\CreateCustomNotification::route('/create'),
            'edit' => Pages\EditCustomNotification::route('/{record}/edit'),
        ];
    }
}
