<?php

namespace App\Filament\Resources\DrugsResource\Pages;

use App\Filament\Resources\DrugsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDrugs extends ListRecords
{
    protected static string $resource = DrugsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
