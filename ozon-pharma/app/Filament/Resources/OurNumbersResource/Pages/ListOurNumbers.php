<?php

namespace App\Filament\Resources\OurNumbersResource\Pages;

use App\Filament\Resources\OurNumbersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurNumbers extends ListRecords
{
    protected static string $resource = OurNumbersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
