<?php

namespace App\Filament\Resources\PharmacovigilancePageContentResource\Pages;

use App\Filament\Resources\PharmacovigilancePageContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPharmacovigilancePageContents extends ListRecords
{
    protected static string $resource = PharmacovigilancePageContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
