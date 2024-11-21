<?php

namespace App\Filament\Resources;

use App\Models\Country;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\GeoResource\Pages;

class GeoResource extends Resource
{
    use \Filament\Resources\Concerns\Translatable;

    protected static ?string $model = Country::class;

    protected static ?string $slug = 'geo';

    // protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationIcon = 'iconoir-globe';

    public static function shouldRegisterNavigation(): bool
    {
        return (bool) auth()->user()?->canAccessGeo();
    }

    public static function canAccess(): bool
    {
        return (bool) auth()->user()?->canAccessGeo();
    }

    public static function getModelLabel(): string
    {
        return __('geo.title');
    }

    public static function getPluralModelLabel(): string
    {
        return __('geo.title');
    }

    // public static function getGloballySearchableAttributes(): array
    // {
    //     return ['code', 'name', 'full_name'];
    // }

    public static function getTranslatableLocales(): array
    {
        return auth()->user()?->getOrderedLocales() ?? [];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->ordered();
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCountries::route('/'),
            'view' => Pages\ViewCountry::route('/{record}'),
            'cities' => Pages\ListCountryCities::route('/{record}/cities'),
        ];
    }
}
