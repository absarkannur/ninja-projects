<?php

namespace App\Filament\Resources\StrategyPageContentResource\Pages;

use App\Filament\Resources\StrategyPageContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStrategyPageContent extends EditRecord
{
    protected static string $resource = StrategyPageContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
