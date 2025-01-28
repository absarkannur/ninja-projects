<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Filament\Resources\ProductsResource\RelationManagers;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
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
use PhpParser\Node\Stmt\Label;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';
    protected static ?string $navigationGroup = 'Products Section';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('brands_id')
                    ->relationship( 'brands', 'brand_name' )
                    ->label('Brand')
                    ->searchable(false)
                    ->required(),
                TextInput::make('product_name')->required()->label('Name'),
                TextInput::make('product_part_number')->required()->label('Part Number'),
                TextInput::make('product_model')->required()->label('Model'),
                TextInput::make('product_parts')->required()->label('Parts'),
                Select::make('series_id')
                    ->relationship( 'series','product_series' )
                    ->Label('Series')
                    ->required(),
                Select::make('colors_id')
                    ->relationship( 'colors', 'color_name' )
                    ->Label('Search Color')
                    ->required(),
                TextInput::make('product_condition')->label('Condition'),
                TextInput::make('product_quality')->label('Quality'),
                FileUpload::make('product_image')->columnSpanFull()->label('Image'),
                Fieldset::make('Latest Product')
                    ->schema([
                        Checkbox::make('product_latest')->label('Latest Product')
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('brands.brand_name')->label('Brand'),
                TextColumn::make('product_name')->searchable()->label('Product Name'),
                TextColumn::make('product_parts')->searchable()->label('Product Parts'),
                TextColumn::make('product_part_number')->searchable()->label('Part Number'),
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
