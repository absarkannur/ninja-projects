<?php

namespace App\Filament\Resources\OrdersResource\Widgets;

use App\Models\Orders;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrderStatus extends BaseWidget
{

    protected function getAllOrder(): string
    {
        $data = Orders::count();
        return $data;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Orders', $this->getAllOrder()),
            Stat::make('Average price', '0.00' ),
        ];
    }
}