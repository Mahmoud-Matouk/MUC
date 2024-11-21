<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;

enum SessionFormat: int implements HasLabel, HasIcon
{
    case PB = 1;

    case CD = 2;

    public function getLabel(): string
    {
        return match ($this) {
            self::PB => trans('registrations.format.pb'),
            self::CD => trans('registrations.format.cd'),
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::PB => 'iconic-file-text',
            self::CD => 'iconic-monitor-2',
        };
    }
}
