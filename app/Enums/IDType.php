<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;

enum IDType: int implements HasLabel, HasIcon
{
    case Passport = 1;

    case NationalID = 2;

    public function getLabel(): string
    {
        return match ($this) {
            self::Passport => trans('registrations.id_type.passport'),
            self::NationalID => trans('registrations.id_type.national_id'),
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::Passport => 'iconoir-user-square',
            self::NationalID => 'iconoir-user-square',
        };
    }
}
