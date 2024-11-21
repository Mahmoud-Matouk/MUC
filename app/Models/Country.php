<?php

namespace App\Models;

use Filament\Forms\Components\Grid;
use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Builder;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model implements Sortable
{
    use HasTranslations, SortableTrait;

    protected array $translatable = [
        'name',
        'full_name',
        'nationality',
    ];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'country_code', 'code');
    }

    public function scopeMobileCodeCountries(Builder $builder): Builder
    {
        return $builder->whereIn('code', config('app.mobile_code_countries'));
    }

    public static function scopeVisibleVenueCountries(Builder $builder): Builder
    {
        return $builder->whereHas('venues', fn ($query) => $query->visible());
    }

    public static function getCountries(): array
    {
        return static::ordered()->pluck('name', 'code')->all();
    }

    public static function getMobileCodeCountries(): array
    {
        return static::mobileCodeCountries()->ordered()->pluck('mobile_code')->mapWithKeys(
            fn ($code) => ["$code" => "+$code"]
        )->all();
    }

    public static function getVisibleVenueCountries(): array
    {
        return static::visibleVenueCountries()->ordered()->pluck('name', 'code')->all();
    }

    public static function getEditForm(): array
    {
        return [
            Grid::make()
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->rules('max:30'),

                    TextInput::make('nationality')
                        ->required()
                        ->rules('max:30'),
                ]),

            TextInput::make('full_name')
                ->required()
                ->rules('max:50'),
        ];
    }
}
