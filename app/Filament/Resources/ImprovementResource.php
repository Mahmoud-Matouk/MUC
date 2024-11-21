<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImprovementResource\Pages;
use App\Filament\Resources\ImprovementResource\RelationManagers;
use App\Models\Improvement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImprovementResource extends Resource
{
    protected static ?string $model = Improvement::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    // protected static ?string $navigationGroup = 'Services';

    public static function canAccess(): bool
    {
        return false;
    }

    public static function getNavigationBadge(): ?string
    {
        return Improvement::count();
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
            'index' => Pages\ListImprovements::route('/'),
            'create' => Pages\CreateImprovement::route('/create'),
            'edit' => Pages\EditImprovement::route('/{record}/edit'),
        ];
    }
}
