<?php

namespace App\Filament\Resources\OrdersResource\Pages;

use App\Filament\Resources\OrdersResource;
use App\Filament\Resources\OrdersResource\Widgets\OrderStatus;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
// use Filament\Resources\Pages\ListRecords\Tab;
use Filament\Resources\Components\Tab;

class ListOrders extends ListRecords
{
    protected static string $resource = OrdersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            OrderStatus::class,
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('All'),
            'new' => Tab::make()->query(fn ($query) => $query->where('order_status', 'new')),
            'processing' => Tab::make()->query(fn ($query) => $query->where('order_status', 'processing')),
            'shipped' => Tab::make()->query(fn ($query) => $query->where('order_status', 'shipped')),
            'delivered' => Tab::make()->query(fn ($query) => $query->where('order_status', 'delivered')),
            'cancelled' => Tab::make()->query(fn ($query) => $query->where('order_status', 'cancelled')),
        ];
    }
}
