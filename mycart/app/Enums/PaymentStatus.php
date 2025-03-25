<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum PaymentStatus: string implements HasColor, HasIcon, HasLabel
{
    case Pending = 'pending';
    case Complete = 'complete';


    public function getLabel(): string
    {
        return match ($this) {
            self::Pending => 'pending',
            self::Complete => 'Complete',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Pending => 'warning',
            self::Complete => 'success'
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Pending => 'heroicon-m-sparkles',
            self::Complete => 'heroicon-m-check-badge',
            // self::Processing => 'heroicon-m-arrow-path',
            // self::Shipped => 'heroicon-m-truck',
            // self::Cancelled => 'heroicon-m-x-circle',
        };
    }
}