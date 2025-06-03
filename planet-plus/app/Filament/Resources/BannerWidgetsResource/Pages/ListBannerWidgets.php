<?php

namespace App\Filament\Resources\BannerWidgetsResource\Pages;

use App\Filament\Resources\BannerWidgetsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBannerWidgets extends ListRecords
{
    protected static string $resource = BannerWidgetsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
