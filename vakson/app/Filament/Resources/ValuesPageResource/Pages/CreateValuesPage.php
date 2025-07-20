<?php

namespace App\Filament\Resources\ValuesPageResource\Pages;

use App\Filament\Resources\ValuesPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateValuesPage extends CreateRecord
{
    protected static string $resource = ValuesPageResource::class;
}
