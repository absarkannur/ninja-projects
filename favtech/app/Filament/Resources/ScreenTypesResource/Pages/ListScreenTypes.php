<?php

namespace App\Filament\Resources\ScreenTypesResource\Pages;

use App\Filament\Resources\ScreenTypesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListScreenTypes extends ListRecords
{
    protected static string $resource = ScreenTypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
