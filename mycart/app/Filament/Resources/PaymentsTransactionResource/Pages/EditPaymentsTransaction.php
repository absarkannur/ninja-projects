<?php

namespace App\Filament\Resources\PaymentsTransactionResource\Pages;

use App\Filament\Resources\PaymentsTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaymentsTransaction extends EditRecord
{
    protected static string $resource = PaymentsTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
