<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandResource\Pages;
use Filament\Resources\Resource;
use App\Models\Brand;
use Filament\Resources\Concerns\Translatable;

class BrandResource extends Resource
{
    use Translatable;
    protected static ?string $model = Brand::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    public static function canAccess(): bool
    {
        return (bool) false;
        // return (bool) app()->environment('production') ? false : true;
    }

    public static function getNavigationBadge(): ?string
    {
        return Brand::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'primary';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBrands::route('/'),
            'create' => Pages\CreateBrand::route('/create'),
            'edit' => Pages\EditBrand::route('/{record}/edit'),
        ];
    }
}
