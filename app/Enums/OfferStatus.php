<?php

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum OfferStatus: string implements HasColor, HasIcon, HasLabel
{
    case Valid = 'Valid';
    case Expired = 'Expired';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Valid => __('offer.valid'),
            self::Expired => __('offer.expired'),
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Valid => 'iconsax-bro-verify',
            self::Expired => 'iconsax-bro-close-circle',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::Valid => 'success',
            self::Expired => 'danger',
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
