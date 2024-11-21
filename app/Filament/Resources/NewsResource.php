<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;

class NewsResource extends Resource
{
    use Translatable;

    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    // protected static ?string $navigationGroup = 'Blog';

    public static function canAccess(): bool
    {
        return false;
    }

    public static function getNavigationBadge(): ?string
    {
        return News::count();
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

    public static function getModelLabel(): string
    {
        return __('news.title');
    }

    public static function getPluralModelLabel(): string
    {
        return __('news.title');
    }

    public static function getTranslatableLocales(): array
    {
        return auth()->user()?->getOrderedLocales() ?? [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
