<?php

namespace App\Filament\Resources\TherapeuticCategoriesResource\Pages;

use App\Filament\Resources\TherapeuticCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTherapeuticCategories extends ListRecords
{
    protected static string $resource = TherapeuticCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
