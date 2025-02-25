<?php

namespace App\Filament\Resources\StrategyPageContentResource\Pages;

use App\Filament\Resources\StrategyPageContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStrategyPageContents extends ListRecords
{
    protected static string $resource = StrategyPageContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
