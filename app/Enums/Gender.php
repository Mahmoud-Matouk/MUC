<?php

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum Gender: int implements HasIcon, HasLabel
{
    case Male = 1;
    case Female = 2;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Male => __('auth.gender.male'),
            self::Female => __('auth.gender.female')
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Male => 'iconsax-lin-man',
            self::Female => 'iconsax-lin-woman'
        };
    }
}
