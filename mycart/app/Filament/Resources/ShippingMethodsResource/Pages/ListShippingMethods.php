<?php

namespace App\Filament\Resources\ShippingMethodsResource\Pages;

use App\Filament\Resources\ShippingMethodsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShippingMethods extends ListRecords
{
    protected static string $resource = ShippingMethodsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
