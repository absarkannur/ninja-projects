<?php

namespace App\Filament\Resources\MissionWidgetsResource\Pages;

use App\Filament\Resources\MissionWidgetsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMissionWidgets extends EditRecord
{
    protected static string $resource = MissionWidgetsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
