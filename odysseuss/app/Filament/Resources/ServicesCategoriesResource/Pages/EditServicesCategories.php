<?php

namespace App\Filament\Resources\ServicesCategoriesResource\Pages;

use App\Filament\Resources\ServicesCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicesCategories extends EditRecord
{
    protected static string $resource = ServicesCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
