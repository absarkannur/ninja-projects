<?php

namespace App\Filament\Resources\ValuesPageResource\Pages;

use App\Filament\Resources\ValuesPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListValuesPages extends ListRecords
{
    protected static string $resource = ValuesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
