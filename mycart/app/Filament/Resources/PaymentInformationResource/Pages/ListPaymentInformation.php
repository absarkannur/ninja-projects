<?php

namespace App\Filament\Resources\PaymentInformationResource\Pages;

use App\Filament\Resources\PaymentInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaymentInformation extends ListRecords
{
    protected static string $resource = PaymentInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
