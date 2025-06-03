<?php

namespace App\Filament\Resources\VisionWidgetsResource\Pages;

use App\Filament\Resources\VisionWidgetsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisionWidgets extends ListRecords
{
    protected static string $resource = VisionWidgetsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
