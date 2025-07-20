<?php

namespace App\Filament\Resources\JourneyPageResource\Pages;

use App\Filament\Resources\JourneyPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJourneyPages extends ListRecords
{
    protected static string $resource = JourneyPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
