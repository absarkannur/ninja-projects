<?php

namespace App\Filament\Resources\DrugsResource\Pages;

use App\Filament\Resources\DrugsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDrugs extends EditRecord
{
    protected static string $resource = DrugsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
