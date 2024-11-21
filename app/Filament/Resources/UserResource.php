<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\UserResource\Pages;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'iconoir-group';

    public static function shouldRegisterNavigation(): bool
    {
        return (bool) auth()->user()?->canAccessUsers();
    }

    public static function canAccess(): bool
    {
        return (bool) auth()->user()?->canAccessUsers();
    }

    public static function getModelLabel(): string
    {
        return __('user.title');
    }

    public static function getPluralModelLabel(): string
    {
        return __('user.title');
    }

    // protected static ?string $recordTitleAttribute = 'name';

    // public static function getGloballySearchableAttributes(): array
    // {
    //     return ['name', 'email', 'mobile', 'locale_mobile'];
    // }

    // public static function getGlobalSearchResultDetails(Model $record): array
    // {
    //     return [
    //         __('app.input.mobile') => $record->locale_mobile,
    //     ];
    // }

    public static function getNavigationBadge(): ?string
    {
        return User::count();
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'logs' => Pages\ListUserLogs::route('/{record}/logs'),
        ];
    }
}
