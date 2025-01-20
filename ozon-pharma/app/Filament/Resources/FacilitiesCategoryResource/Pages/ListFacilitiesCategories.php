<?php

namespace App\Filament\Resources\FacilitiesCategoryResource\Pages;

use App\Filament\Resources\FacilitiesCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFacilitiesCategories extends ListRecords
{
    protected static string $resource = FacilitiesCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
