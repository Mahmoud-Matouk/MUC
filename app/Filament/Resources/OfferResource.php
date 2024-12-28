<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfferResource\Pages;
use App\Models\Offer;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
class OfferResource extends Resource
{
    use Translatable;
    protected static ?string $model = Offer::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    // protected static ?string $navigationGroup = 'Services';

    public static function canAccess(): bool
    {
        return (bool) false;
    }

    public static function getNavigationBadge(): ?string
    {
        return Offer::where('active',true)->count();
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
            'index' => Pages\ListOffers::route('/'),
            'create' => Pages\CreateOffer::route('/create'),
            'edit' => Pages\EditOffer::route('/{record}/edit'),
        ];
    }
}
