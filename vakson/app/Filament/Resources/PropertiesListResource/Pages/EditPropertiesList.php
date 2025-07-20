<?php

namespace App\Filament\Resources\PropertiesListResource\Pages;

use App\Filament\Resources\PropertiesListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPropertiesList extends EditRecord
{
    protected static string $resource = PropertiesListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
