<?php

namespace App\Filament\Resources\MailSubscribeResource\Pages;

use App\Filament\Resources\MailSubscribeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMailSubscribes extends ListRecords
{
    protected static string $resource = MailSubscribeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
