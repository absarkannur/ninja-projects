<?php

namespace App\Filament\Resources\AboutUsWidgetsResource\Pages;

use App\Filament\Resources\AboutUsWidgetsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutUsWidgets extends ListRecords
{
    protected static string $resource = AboutUsWidgetsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
