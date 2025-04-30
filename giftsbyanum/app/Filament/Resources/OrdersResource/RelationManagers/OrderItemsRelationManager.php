<?php

namespace App\Filament\Resources\OrdersResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\Summarizers\Sum;
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
                TextColumn::make('order_qty')
                    ->summarize([
                        Sum::make()->label('')
                    ])
                    ->label('Quantity'),
                TextColumn::make('order_price')
                    ->money( env('APP_CURRENCY') )
                    ->summarize([
                        Sum::make()->money( env('APP_CURRENCY') )->label('')
                    ])
                    ->label('Price'),
                TextColumn::make('order_discount_percent')
                    ->money( env('APP_CURRENCY') )
                    ->summarize([
                        Sum::make()->money( env('APP_CURRENCY') )->label('')
                    ])
                    ->label('Discount'),
                TextColumn::make('order_tax_percent')
                    ->money( env('APP_CURRENCY') )
                    ->summarize([
                        Sum::make()->money( env('APP_CURRENCY') )->label('')
                    ])
                    ->label('TAX'),
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
