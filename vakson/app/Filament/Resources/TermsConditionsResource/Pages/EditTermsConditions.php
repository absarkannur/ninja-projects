<?php

namespace App\Filament\Resources\TermsConditionsResource\Pages;

use App\Filament\Resources\TermsConditionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTermsConditions extends EditRecord
{
    protected static string $resource = TermsConditionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
