<?php

namespace App\Filament\Resources\HeaderScriptsResource\Pages;

use App\Filament\Resources\HeaderScriptsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeaderScripts extends ListRecords
{
    protected static string $resource = HeaderScriptsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
