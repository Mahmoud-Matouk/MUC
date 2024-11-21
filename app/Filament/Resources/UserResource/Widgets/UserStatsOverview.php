<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class UserStatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '20s';

    protected function getStats(): array
    {
        return [
            Stat::make('Agent Users', User::agent()->count())
                ->icon('iconsax-bro-personalcard')
                ->color('success'),

            Stat::make('Active Users', User::active()->count())
                ->icon('iconsax-bro-verify')
                ->color('success'),

            Stat::make('Inactive Users', User::active(false)->count())
                ->icon('iconsax-bro-close-circle')
                ->color('danger'),

            Stat::make('All Users', User::count())
                ->icon('iconsax-bro-user'),
        ];
    }
}
