<?php

namespace App\Filament\Resources\ShippingMethodsResource\Pages;

use App\Filament\Resources\ShippingMethodsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShippingMethods extends EditRecord
{
    protected static string $resource = ShippingMethodsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
