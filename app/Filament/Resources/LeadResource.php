<?php

namespace App\Filament\Resources;

use App\Models\Lead;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\LeadResource\Pages;
use App\Filament\Resources\LeadResource\RelationManagers\ActionsRelationManager;

class LeadResource extends Resource
{
    use Translatable;
    protected static ?string $model = Lead::class;

    protected static ?string $navigationIcon = 'iconsax-bro-people';

    public static function canAccess(): bool
    {
        return true;
        // return (bool) auth()->user()?->canAccessLeads();
    }

    public static function shouldRegisterNavigation(): bool
    {
        return true;
        // return (bool) auth()->user()?->canAccessLeads();
    }

    public static function getNavigationBadge(): ?string
    {
        return Lead::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'primary';
    }

    public static function getEditUrl($record)
    {
        // Redirect to the View page instead of the Edit page
        return static::generateResourceUrl('/{record}');
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->latest();
    }

    public static function getModelLabel(): string
    {
        return __('lead.title');
    }

    public static function getPluralModelLabel(): string
    {
        return __('lead.title');
    }

    public static function getRelations(): array
    {
        return [
            ActionsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLeads::route('/'),
            'create' => Pages\CreateLead::route('/create'),
            'view' => Pages\ViewLead::route('/{record}'),
            'edit' => Pages\EditLead::route('/{record}/edit'),
        ];
    }
}
