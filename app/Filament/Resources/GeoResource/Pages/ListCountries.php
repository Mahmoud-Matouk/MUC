<?php

namespace App\Filament\Resources\GeoResource\Pages;

use App\Models\Country;
use Filament\Tables\Table;
use Filament\Actions\LocaleSwitcher;
use App\Filament\Resources\GeoResource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Pages\ListRecords;

class ListCountries extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = GeoResource::class;

    protected function getActions(): array
    {
        return [
            LocaleSwitcher::make(),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->poll('20s')
            ->striped()
            ->reorderable('order')
            ->persistFiltersInSession()
            ->columns([
                ImageColumn::make('flag')
                    ->label(__('app.input.avatar'))
                    ->circular()
                    ->size(36)
                    ->getStateUsing(fn (Country $record) => url($record->flag)),

                TextColumn::make('name')
                    ->label(__('app.input.name'))
                    ->description(fn (Country $record) => $record->full_name)
                    ->searchable(['name', 'full_name']),

                TextColumn::make('code')
                    ->label(__('app.input.nationality'))
                    ->description(fn (Country $record) => $record->nationality)
                    ->searchable(['code', 'nationality']),

                TextColumn::make('currency')
                    ->label(__('app.input.currency'))
                    ->description(fn (Country $record) => $record->timezone ?? '..')
                    ->searchable(['currency', 'timezone']),

                TextColumn::make('mobile_code')
                    ->label(__('app.input.mobile_code'))
                    ->searchable(),
            ])->actions([
                EditAction::make('edit')
                    ->iconButton()
                    ->modalWidth('lg')
                    ->icon('iconoir-page-edit')
                    ->tooltip(__('app.edit'))
                    ->form(Country::getEditForm()),
            ]);
    }
}
