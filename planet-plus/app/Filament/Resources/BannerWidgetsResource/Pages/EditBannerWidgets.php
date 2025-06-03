<?php

namespace App\Filament\Resources\BannerWidgetsResource\Pages;

use App\Filament\Resources\BannerWidgetsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBannerWidgets extends EditRecord
{
    protected static string $resource = BannerWidgetsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
