<?php

namespace App\Filament\Resources\PaymentsTransactionResource\Pages;

use App\Filament\Resources\PaymentsTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaymentsTransactions extends ListRecords
{
    protected static string $resource = PaymentsTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
