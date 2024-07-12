<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DrugClassesResource\Pages;
use App\Filament\Resources\DrugClassesResource\RelationManagers;
use App\Models\DrugClasses;
use App\Models\ProductCategories;
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

class DrugClassesResource extends Resource
{
    protected static ?string $model = DrugClasses::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Products';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                Select::make('product_categories_id')
                    ->label('Category')
                    // ->options(ProductCategories::all()->pluck('name','id')),
                    ->relationship( 'product_categories', 'name' )
                    ->preload()
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('product_categories.name'),
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
            'index' => Pages\ListDrugClasses::route('/'),
            'create' => Pages\CreateDrugClasses::route('/create'),
            'edit' => Pages\EditDrugClasses::route('/{record}/edit'),
        ];
    }
}
