<?php

namespace App\Filament\Resources\ServicesCategoriesContentResource\Pages;

use App\Filament\Resources\ServicesCategoriesContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicesCategoriesContents extends ListRecords
{
    protected static string $resource = ServicesCategoriesContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
