<?php

namespace App\Filament\Resources\AboutUsWidgetsResource\Pages;

use App\Filament\Resources\AboutUsWidgetsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutUsWidgets extends EditRecord
{
    protected static string $resource = AboutUsWidgetsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
