<?php

namespace App\Filament\Resources;

use App\Models\Category;
use Filament\Resources\Resource;
use App\Filament\Resources\CategoryResource\Pages;
use Filament\Resources\Concerns\Translatable;

class CategoryResource extends Resource
{
    use Translatable;
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    // protected static ?string $navigationGroup = 'Services';

    public static function canAccess(): bool
    {
        return (bool) false;
    }
    
    public static function getNavigationBadge(): ?string
    {
        return Category::where('active', true)->count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'primary';
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
