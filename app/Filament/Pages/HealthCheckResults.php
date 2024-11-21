<?php

namespace App\Filament\Pages;

use ShuvroRoy\FilamentSpatieLaravelHealth\Pages\HealthCheckResults as BaseHealthCheckResults;

class HealthCheckResults extends BaseHealthCheckResults
{
    public static function getNavigationGroup(): ?string
    {
        return 'Dev';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
        // return auth()->user()->isSuper();
    }

    public function mount(): void
    {
        abort_unless(auth()->user()->isSuper(), 403);
    }
}
