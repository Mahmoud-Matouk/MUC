<?php

namespace App\Filament\Resources;

use App\Models\Post;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\Widgets\PostChartWidget;
use App\Filament\Resources\PostResource\Widgets\PostStatsWidget;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'iconsax-out-card-edit';

    // protected static ?string $navigationGroup = 'Blog';

    public static function getWidgets(): array
    {
        return [
            PostStatsWidget::class,
            PostChartWidget::class,
        ];
    }

    public static function shouldRegisterNavigation(): bool
    {
        return (bool) auth()->user()?->canAccessPosts();
    }

    public static function canAccess(): bool
    {
        return (bool) auth()->user()?->canAccessPosts();
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->latest();
    }

    public static function getModelLabel(): string
    {
        return __('post.title');
    }

    public static function getPluralModelLabel(): string
    {
        return __('post.title');
    }

    public static function getNavigationBadge(): ?string
    {
        return Post::count();
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
