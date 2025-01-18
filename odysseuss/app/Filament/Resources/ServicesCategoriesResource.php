<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicesCategoriesResource\Pages;
use App\Filament\Resources\ServicesCategoriesResource\RelationManagers;
use App\Models\ServicesCategories;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServicesCategoriesResource extends Resource
{
    protected static ?string $model = ServicesCategories::class;

    protected static ?string $navigationGroup = 'Services';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Service Categories';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('services_id')
                    ->relationship( 'services', 'service_list_header' )
                    ->preload()
                    ->required(),
                TextInput::make('service_category_name')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('service_category_name')->label('Service Category'),
                TextColumn::make('services.service_list_header')
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
            'index' => Pages\ListServicesCategories::route('/'),
            'create' => Pages\CreateServicesCategories::route('/create'),
            'edit' => Pages\EditServicesCategories::route('/{record}/edit'),
        ];
    }
}
