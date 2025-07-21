<?php

namespace App\Filament\Resources\JourneySliderResource\Pages;

use App\Filament\Resources\JourneySliderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJourneySlider extends EditRecord
{
    protected static string $resource = JourneySliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
