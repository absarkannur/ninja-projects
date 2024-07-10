<?php

namespace App\Filament\Resources\DrugClassesResource\Pages;

use App\Filament\Resources\DrugClassesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDrugClasses extends ListRecords
{
    protected static string $resource = DrugClassesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
