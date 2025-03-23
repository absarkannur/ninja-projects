<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Filament\Resources\ProductsResource\RelationManagers;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationGroup = "Store";
    protected static ?int $navigationSort = 2;

    protected static ?string $navigationBadgeTooltip = 'The number of Products';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Fieldset::make('')->schema([

                    TextInput::make('product_name')
                        ->live(onBlur:true)
                        ->afterStateUpdated(function( string $operation, string $state, Forms\Set $set ){
                            $set( 'product_slug', Str::slug($state) );
                        })->required()->label('Product Name'),
                    TextInput::make('product_slug')->readOnly()->required(),
                    Textarea::make('product_description')->label('Product Description')->columnSpanFull(),

                    Section::make('Images')->schema([
                        FileUpload::make('product_images')->multiple()->label('')->columnSpanFull()
                    ]),

                    Section::make('Pricing')->schema([
                        TextInput::make('product_original_price')->numeric()->required(),
                        TextInput::make('product_sales_price')->numeric()->required(),
                        TextInput::make('product_qty_in_stock')->numeric()->required(),
                    ])->columns(2),

                    Section::make('Inventory')->schema([
                        TextInput::make('product_sku')->label('SKU (Stock Keeping Unit)')->required(),
                    ])->columns(2),

                ])->columnSpan(2)->columns(2),

                Section::make('')->schema([

                    Select::make('brands_id')
                        ->relationship( 'brands', 'brand_name' )
                        ->label('Brand')
                        ->searchable(false)
                        ->columnSpanFull()
                        ->required(),
                    Select::make('sub_categories_id')
                        ->relationship( 'sub_categories', 'sub_category_name' )
                        ->label('Category')
                        ->searchable(false)
                        ->columnSpanFull()
                        ->required(),
                    Select::make('offers_id')
                        ->relationship( 'offers', 'offer_name' )
                        ->label('Offer')
                        ->searchable(false)
                        ->columnSpanFull(),
                    Select::make('taxes_id')
                        ->relationship( 'taxes', 'tax_title' )
                        ->label('Tax')
                        ->searchable(false)
                        ->columnSpanFull(),

                    Toggle::make('product_status')
                        ->label('Visible'),

                    ViewField::make('')
                        ->viewData([ 'content' => 'This product will be hidden from all sales channels.' ])
                        ->view('forms.components.plain-text'),

                ])->columnSpan(1)->columns(1),

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product_name')->label('Product Name'),
                TextColumn::make('product_original_price')->label('Original Price'),
                TextColumn::make('product_sales_price')->label('Sales Price'),
                TextColumn::make('product_qty_in_stock')->label('QTY in Stock'),
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
