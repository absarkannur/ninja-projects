<?php

namespace App\Filament\Resources\OurNumbersResource\Pages;

use App\Filament\Resources\OurNumbersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurNumbers extends EditRecord
{
    protected static string $resource = OurNumbersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
