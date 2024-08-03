<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Filament\Resources\ProductsResource\RelationManagers;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('brands_id')
                    ->label('Brand')
                    ->relationship( 'brands', 'brand_name' )
                    ->searchable(false)
                    ->required(),
                TextInput::make('product_name')->label('Name')->required(),
                TextInput::make('product_model')->label('Model'),
                TextInput::make('product_part_number')->label('Part Number'),
                TextInput::make('product_parts')->label('Parts'),

                Select::make('product_color')
                    ->label('Color')
                    ->options([
                        'black' => 'Black',
                        'white' => 'White',
                        'blue' => 'Blue'
                    ]),
                TextInput::make('product_condition')->label('Condition'),
                TextInput::make('product_quality')->label('Quality'),
                FileUpload::make('product_image')->label('Image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product_name')->label('Product Name'),
                TextColumn::make('brands.brand_name')->label('Brand'),
                ImageColumn::make('product_image')->label('Image'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}
