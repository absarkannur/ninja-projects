<?php

namespace App\Filament\Resources\PaymentInformationResource\Pages;

use App\Filament\Resources\PaymentInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaymentInformations extends EditRecord
{
    protected static string $resource = PaymentInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
