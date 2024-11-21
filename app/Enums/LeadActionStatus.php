<?php

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum LeadActionStatus: string implements HasColor, HasIcon, HasLabel
{
    case New = 'new';

    case Follow = 'follow';

    case Done = 'done';

    case Closed = 'closed';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::New => __('lead.status.new'),
            self::Follow => __('lead.status.follow'),
            self::Done => __('lead.status.done'),
            self::Closed => __('lead.status.closed'),
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::New => 'iconsax-bro-bucket-square',
            self::Follow => 'iconsax-bro-arrow-square',
            self::Done => 'iconsax-bro-tick-square',
            self::Closed => 'iconsax-bro-close-square',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::New => 'primary',
            self::Follow => 'secondary',
            self::Done => 'success',
            self::Closed => 'danger',
        };
    }

    public static function getColors(): array
    {
        return collect(self::cases())->map(fn ($item) => [
            $item->value => self::from($item->value)->getColor(),
        ])->toArray();
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

    public static function colorsSelectArray(): array
    {
        return collect(self::cases())->mapWithKeys(fn ($item) => [
            $item->value => self::from($item->value)->getColor(),
        ])->toArray();
    }
}
