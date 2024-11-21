<?php

namespace App\Filament\Resources\ServicesCategoriesResource\Pages;

use App\Filament\Resources\ServicesCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicesCategories extends ListRecords
{
    protected static string $resource = ServicesCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
