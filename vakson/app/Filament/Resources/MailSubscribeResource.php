<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MailSubscribeResource\Pages;
use App\Filament\Resources\MailSubscribeResource\RelationManagers;
use App\Models\MailSubscribe;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MailSubscribeResource extends Resource
{
    protected static ?string $model = MailSubscribe::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('email'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListMailSubscribes::route('/'),
            'create' => Pages\CreateMailSubscribe::route('/create'),
            'edit' => Pages\EditMailSubscribe::route('/{record}/edit'),
        ];
    }
}
