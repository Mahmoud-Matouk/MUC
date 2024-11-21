<?php

namespace App\Filament\Resources;

use App\Models\Analysis;
use Filament\Resources\Resource;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\AnalysisResource\Pages;


class AnalysisResource extends Resource
{
    use Translatable;
    protected static ?string $model = Analysis::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';

    public static function canAccess(): bool
    {
        return (bool) true;
    }

    public static function getNavigationBadge(): ?string
    {
        return Analysis::where('active',true)->count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'primary';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnalyses::route('/'),
            'create' => Pages\CreateAnalysis::route('/create'),
            'edit' => Pages\EditAnalysis::route('/{record}/edit'),
        ];
    }
}
