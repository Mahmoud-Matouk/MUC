<?php

namespace App\Filament\Resources\LeadResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Actions\LocaleSwitcher;
use App\Filament\Resources\LeadResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditLead extends EditRecord
{
    // use Translatable;
    protected static string $resource = LeadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            // LocaleSwitcher::make(),
        ];
    }
}
