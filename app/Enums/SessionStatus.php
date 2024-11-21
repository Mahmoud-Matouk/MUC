<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;

enum SessionStatus: int implements HasLabel, HasIcon, HasColor
{
    case Open = 1;

    case Closed = 2;

    public function getLabel(): string
    {
        return match ($this) {
            self::Open => 'Open',
            self::Closed => 'Closed',
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::Open => 'check-circle',
            self::Closed => 'close-circle',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Open => 'green',
            self::Closed => 'red',
        };
    }
}
