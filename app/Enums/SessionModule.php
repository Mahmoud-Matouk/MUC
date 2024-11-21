<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;

enum SessionModule: int implements HasLabel, HasIcon
{
    case AC = 1;

    case GT = 2;

    public function getLabel(): string
    {
        return match ($this) {
            self::AC => trans('registrations.module.ac'),
            self::GT => trans('registrations.module.gt'),
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::AC => 'iconic-book',
            self::GT => 'iconic-flag',
        };
    }

    public static function all(): array
    {
        return collect(self::cases())->map(fn ($case) => $case->data())->toArray();
    }
}
