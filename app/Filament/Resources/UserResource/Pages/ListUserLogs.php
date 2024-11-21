<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use pxlrbt\FilamentActivityLog\Pages\ListActivities;

class ListUserLogs extends ListActivities
{
    protected static string $resource = UserResource::class;

    public function mount($record): void
    {
        $this->record = $this->resolveRecord($record);

        abort_unless(auth()->user()->isSuper(), 403);
    }
}
