<?php

namespace App\Filament\Resources\PaymentsTransactionResource\Pages;

use App\Filament\Resources\PaymentsTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePaymentsTransaction extends CreateRecord
{
    protected static string $resource = PaymentsTransactionResource::class;
}
