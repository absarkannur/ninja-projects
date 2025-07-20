<?php

namespace App\Filament\Resources\JourneyListResource\Pages;

use App\Filament\Resources\JourneyListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJourneyLists extends ListRecords
{
    protected static string $resource = JourneyListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
