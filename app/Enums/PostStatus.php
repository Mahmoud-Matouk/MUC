<?php

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum PostStatus: string implements HasColor, HasIcon, HasLabel
{
    case Draft = 'draft';
    case Scheduled = 'scheduled';
    case Published = 'published';
    case Hidden = 'hidden';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Draft => __('post.draft'),
            self::Scheduled => __('post.scheduled'),
            self::Published => __('post.published'),
            self::Hidden => __('post.hidden'),
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Draft => 'iconoir-page-edit',
            self::Scheduled => 'iconsax-bro-calendar-edit',
            self::Published => 'iconsax-bro-wifi',
            self::Hidden => 'iconsax-bro-eye-slash',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::Draft => 'gray',
            self::Scheduled => 'warning',
            self::Published => 'success',
            self::Hidden => 'danger',
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
