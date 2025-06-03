<?php

namespace App\Filament\Resources\WhoweareWidgetsResource\Pages;

use App\Filament\Resources\WhoweareWidgetsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhoweareWidgets extends ListRecords
{
    protected static string $resource = WhoweareWidgetsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
