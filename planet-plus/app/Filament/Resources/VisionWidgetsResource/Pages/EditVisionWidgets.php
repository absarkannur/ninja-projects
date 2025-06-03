<?php

namespace App\Filament\Resources\VisionWidgetsResource\Pages;

use App\Filament\Resources\VisionWidgetsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisionWidgets extends EditRecord
{
    protected static string $resource = VisionWidgetsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
