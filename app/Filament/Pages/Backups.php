<?php

namespace App\Filament\Pages;

use ShuvroRoy\FilamentSpatieLaravelBackup\Pages\Backups as BaseBackups;

class Backups extends BaseBackups
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
