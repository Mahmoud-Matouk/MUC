<?php

namespace App\Filament\Resources\GeoResource\Pages;

use App\Models\Country;
use Filament\Actions\EditAction;
use Filament\Infolists\Infolist;
use Filament\Actions\LocaleSwitcher;
use App\Filament\Resources\GeoResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\Section;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use App\Filament\Resources\GeoResource\RelationManagers\CitiesRelationManager;

class ViewCountry extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;

    protected static string $resource = GeoResource::class;

    public function getTitle(): Htmlable|string
    {
        return $this->record->name;
    }

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),

            EditAction::make('edit')
                ->outlined()
                ->modalWidth('lg')
                ->icon('iconoir-page-edit')
                ->form(Country::getEditForm()),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make()
                    ->columns(4)
                    ->schema([
                        ImageEntry::make('flag')
                            ->hiddenLabel()
                            ->circular()
                            ->size(56)
                            ->getStateUsing(fn (Country $record) => url($record->flag)),

                        TextEntry::make('name')
                            ->hiddenLabel()
                            ->color('primary')
                            ->icon('iconsax-bro-global')
                            ->size(TextEntry\TextEntrySize::Large)
                            ->helperText(fn ($record) => $record->full_name)
                            ->extraAttributes([
                                'class' => 'font-bold',
                            ]),

                        TextEntry::make('nationality')
                            ->hiddenLabel()
                            ->color('primary')
                            ->icon('iconsax-bro-user')
                            ->size(TextEntry\TextEntrySize::Large)
                            ->helperText(fn ($record) => __('app.input.code')." - $record->code - ".__('app.input.currency')." - $record->currency")
                            ->extraAttributes([
                                'class' => 'font-bold',
                            ]),

                        TextEntry::make('mobile_code')
                            ->hiddenLabel()
                            ->prefix('+')
                            ->color('primary')
                            ->icon('iconsax-bro-mobile')
                            ->size(TextEntry\TextEntrySize::Large)
                            ->helperText(__('app.input.mobile_code'))
                            ->extraAttributes([
                                'class' => 'font-bold',
                            ]),
                    ]),

            ]);
    }

    public function getRelationManagers(): array
    {
        return [
            CitiesRelationManager::class,
        ];
    }
}
