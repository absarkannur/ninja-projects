<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShippingMethodsResource\Pages;
use App\Filament\Resources\ShippingMethodsResource\RelationManagers;
use App\Models\ShippingMethods;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShippingMethodsResource extends Resource
{
    protected static ?string $model = ShippingMethods::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?int $navigationSort = 103;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('shipping_title')->required(),
                TextInput::make('shipping_charge')->numeric()->required(),
                Textarea::make('shipping_description')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('shipping_title'),
                TextColumn::make('shipping_charge')
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
            'index' => Pages\ListShippingMethods::route('/'),
            'create' => Pages\CreateShippingMethods::route('/create'),
            'edit' => Pages\EditShippingMethods::route('/{record}/edit'),
        ];
    }
}
