<?php

namespace App\Filament\Resources\BrandResource\Pages;

use App\Models\Brand;
use Filament\Actions;
use Filament\Tables\Table;
use Filament\Actions\LocaleSwitcher;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use App\Filament\Resources\BrandResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListBrands extends ListRecords
{
    use Translatable;
    protected static string $resource = BrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label(__('brand.create'))
                ->hidden(fn() => Brand::count() == 1),
            LocaleSwitcher::make(),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->poll('20s')
            ->striped()
            ->persistFiltersInSession()
            ->columns([
                ImageColumn::make('logo')
                    ->label(__('app.input.logo'))
                    ->defaultImageUrl(url(config('app.fallback.anonymous'))),

                TextColumn::make('name')
                    ->label(__('app.input.name'))
                    ->description(fn(Brand $brand) => str($brand->description)->limit(50))
                    ->searchable(),

                TextColumn::make('primary_color')
                    ->label(__('app.input.primary_color')),

                TextColumn::make('secondary_color')
                    ->label(__('app.input.secondary_color')),
            ]);
    }
}
