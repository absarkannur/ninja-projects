<?php

namespace App\Filament\Resources\JourneySliderResource\Pages;

use App\Filament\Resources\JourneySliderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJourneySliders extends ListRecords
{
    protected static string $resource = JourneySliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
