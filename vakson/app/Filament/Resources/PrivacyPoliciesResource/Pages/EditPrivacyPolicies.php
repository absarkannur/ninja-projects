<?php

namespace App\Filament\Resources\PrivacyPoliciesResource\Pages;

use App\Filament\Resources\PrivacyPoliciesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrivacyPolicies extends EditRecord
{
    protected static string $resource = PrivacyPoliciesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
