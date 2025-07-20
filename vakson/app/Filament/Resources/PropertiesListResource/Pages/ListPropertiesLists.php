<?php

namespace App\Filament\Resources\PropertiesListResource\Pages;

use App\Filament\Resources\PropertiesListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPropertiesLists extends ListRecords
{
    protected static string $resource = PropertiesListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
