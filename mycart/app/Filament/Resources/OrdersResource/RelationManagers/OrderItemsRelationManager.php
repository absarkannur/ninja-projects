<?php

namespace App\Filament\Resources\OrdersResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'OrderItems';

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('order_price')
                    ->required()
                    ->maxLength(255),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('order_price')
            ->columns([
                TextColumn::make('products.product_name'),
                TextColumn::make('order_qty')->label('Quantity'),
                TextColumn::make('order_price')->label('Price'),
                TextColumn::make('order_discount_percent')->label('Discount'),
                TextColumn::make('order_tax_percent')->label('TAX'),
                TextColumn::make('order_shipping_charge')->label('Shipping'),
            ])
            ->paginated(false)
            ->filters([
                //
            ])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
