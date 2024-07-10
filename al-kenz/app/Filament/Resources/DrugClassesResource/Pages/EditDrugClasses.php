<?php

namespace App\Filament\Resources\DrugClassesResource\Pages;

use App\Filament\Resources\DrugClassesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDrugClasses extends EditRecord
{
    protected static string $resource = DrugClassesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
