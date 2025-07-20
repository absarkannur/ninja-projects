<?php

namespace App\Filament\Resources\JourneyPageResource\Pages;

use App\Filament\Resources\JourneyPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJourneyPage extends EditRecord
{
    protected static string $resource = JourneyPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
