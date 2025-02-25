<?php

namespace App\Filament\Resources\AboutPageContentResource\Pages;

use App\Filament\Resources\AboutPageContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutPageContent extends EditRecord
{
    protected static string $resource = AboutPageContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
