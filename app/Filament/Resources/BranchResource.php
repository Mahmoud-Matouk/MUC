<?php

namespace App\Filament\Resources;

use App\Models\Branch;
use Filament\Resources\Resource;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\BranchResource\Pages;

class BranchResource extends Resource
{
    use Translatable;

    protected static ?string $model = Branch::class;

    protected static ?string $navigationIcon = 'iconsax-bro-building-3';

    public static function canAccess(): bool
    {
        return (bool) false;
        // return (bool) auth()->user()?->canAccessBranches();
    }

    public static function shouldRegisterNavigation(): bool
    {
        return (bool) auth()->user()?->canAccessBranches();
    }

    public static function getModelLabel(): string
    {
        return __('branch.title');
    }

    public static function getPluralModelLabel(): string
    {
        return __('branch.title');
    }

    public static function getTranslatableLocales(): array
    {
        return auth()->user()?->getOrderedLocales() ?? [];
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
            'index' => Pages\ListBranches::route('/'),
            //            'create' => Pages\CreateBranch::route('/create'),
        ];
    }
}
