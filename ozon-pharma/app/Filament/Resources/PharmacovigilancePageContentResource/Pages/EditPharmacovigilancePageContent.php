<?php

namespace App\Filament\Resources\PharmacovigilancePageContentResource\Pages;

use App\Filament\Resources\PharmacovigilancePageContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPharmacovigilancePageContent extends EditRecord
{
    protected static string $resource = PharmacovigilancePageContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
