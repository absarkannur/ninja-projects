<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\OrderItemsResource;
use App\Filament\Resources\OrdersResource;
use App\Filament\Resources\ProductsResource;
use App\Models\Orders;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestOrders extends BaseWidget
{

    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 2,
    ];

    public function table(Table $table): Table
    {
        return $table
            ->query(
                OrdersResource::getEloquentQuery()
            )
            ->defaultSort('created_at', 'DESC')
            ->columns([
                TextColumn::make('order_number')->label('Order Number'),
                TextColumn::make('customers.customer_name')->label('Customer'),
                TextColumn::make('order_status')->label('Order Status'),
                TextColumn::make('order_date')->label('Order Date'),
            ])
            ->actions([
                Action::make('View Order')
                    ->url(fn (Orders $record): string => OrdersResource::getUrl('view',['record' => $record ]))
                    ->icon('heroicon-o-eye')
            ]);
    }
}
