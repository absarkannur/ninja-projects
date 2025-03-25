<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderItemsResource\Pages;
use App\Filament\Resources\OrderItemsResource\RelationManagers;
use App\Models\OrderItems;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderItemsResource extends Resource
{
    protected static ?string $model = OrderItems::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';
    protected static ?string $navigationGroup = "Sales";
    protected static ?string $navigationParentItem = "Orders";
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('orders_id')
                    ->relationship( 'orders', 'order_number' )
                    ->label('Order ID')
                    ->searchable(true)
                    ->required(),
                Select::make('products_id')
                    ->relationship( 'products', 'product_name' )
                    ->label('Product')
                    ->searchable(true)
                    ->required(),
                Section::make('')->schema([
                    TextInput::make('order_qty')->numeric()->required(),
                    TextInput::make('order_price')->numeric()->required(),
                    TextInput::make('order_discount_percent')->numeric()->required(),
                    TextInput::make('order_tax_percent')->numeric()->required(),
                    TextInput::make('order_shipping_charge')->numeric()->required(),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('orders.order_number')
                    ->searchable()
                    ->width('30%'),
                TextColumn::make('order_qty')->label('QTY'),
                TextColumn::make('order_price')->label('Price'),
                TextColumn::make('order_discount_percent')->label('Discount'),
                TextColumn::make('order_tax_percent')->label('Tax'),
                TextColumn::make('order_shipping_charge')->label('Shipping'),
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
            'index' => Pages\ListOrderItems::route('/'),
            'create' => Pages\CreateOrderItems::route('/create'),
            'edit' => Pages\EditOrderItems::route('/{record}/edit'),
        ];
    }
}
