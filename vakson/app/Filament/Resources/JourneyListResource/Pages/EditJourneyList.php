<?php

namespace App\Filament\Resources\JourneyListResource\Pages;

use App\Filament\Resources\JourneyListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJourneyList extends EditRecord
{
    protected static string $resource = JourneyListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
