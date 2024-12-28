<?php

namespace App\Filament\Resources;

use App\Models\Bundle;
use Filament\Resources\Resource;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\BundleResource\Pages;
use App\Filament\Resources\BundleResource\RelationManagers\AnalysesRelationManager;

class BundleResource extends Resource
{
    use Translatable;
    protected static ?string $model = Bundle::class;

    protected static ?string $navigationIcon = 'heroicon-o-receipt-percent';

    public static function canAccess(): bool
    {
        return (bool) false;
    }

    public static function getNavigationBadge(): ?string
    {
        return Bundle::where('active', true)->count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'primary';
    }

    public static function getRelations(): array
{
    return [
        AnalysesRelationManager::class,
    ];
}

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBundles::route('/'),
            'create' => Pages\CreateBundle::route('/create'),
            'edit' => Pages\EditBundle::route('/{record}/edit'),
        ];
    }
}
