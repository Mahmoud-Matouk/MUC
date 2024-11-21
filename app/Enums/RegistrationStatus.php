<?php

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum RegistrationStatus: string implements HasColor, HasIcon, HasLabel
{
    case New = 'new';

    case Follow = 'follow';

    case Paid = 'paid';

    case Verified = 'verified';

    case Closed = 'closed';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::New => __('registrations.status.new'),
            self::Follow => __('registrations.status.follow'),
            self::Paid => __('registrations.status.paid'),
            self::Verified => __('registrations.status.verified'),
            self::Closed => __('registrations.status.closed'),
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::New => 'iconsax-bro-bucket-square',
            self::Follow => 'iconsax-bro-arrow-square',
            self::Paid => 'iconsax-bro-credit-card',
            self::Verified => 'iconsax-bro-tick-square',
            self::Closed => 'iconsax-bro-close-square',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::New => 'gray',
            self::Follow => 'warning',
            self::Paid => 'success',
            self::Verified => 'success',
            self::Closed => 'danger',
        };
    }

    public static function all(): array
    {
        return collect(self::cases())->map(fn ($item) => [
            'value' => $item->value,
            'label' => self::from($item->value)->getLabel(),
            'icon' => self::from($item->value)->getIcon(),
            'color' => self::from($item->value)->getColor(),
        ])->toArray();
    }

    public static function toSelectArray(): array
    {
        return collect(self::cases())->mapWithKeys(fn ($item) => [
            $item->value => self::from($item->value)->getLabel(),
        ])->toArray();
    }
}
