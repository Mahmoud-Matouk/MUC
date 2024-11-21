<?php

namespace App\Filament\Resources\UserResource\Pages;

use Exception;
use App\Enums\Role;
use App\Models\User;
use Filament\Tables;
use Filament\Actions;
use App\Models\RoleModel;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\UserResource;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use STS\FilamentImpersonate\Tables\Actions\Impersonate;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label(__('user.create')),
        ];
    }


    public function table(Table $table): Table
    {
        return $table
            ->poll('20s')
            ->striped()
            ->reorderable('order')
            ->persistFiltersInSession()
            ->modifyQueryUsing(
                fn (Builder $query) => $query->withTrashed()->ordered()
            )
            ->columns([
                ImageColumn::make('avatar')
                    ->label(__('app.input.avatar'))
                    ->circular()
                    ->size(36)
                    ->grow(false)
                    ->defaultImageUrl(url(config('app.fallback.anonymous'))),

                TextColumn::make('name')
                    ->label(__('app.input.name'))
                    ->limit(30)
                    ->description(fn (User $user) => $user->username)
                    ->searchable(['name', 'username']),

                TextColumn::make('email')
                    ->label(__('app.input.email'))
                    ->limit(22)
                    ->description(fn (User $user) => $user->locale_mobile)
                    ->searchable(['email', 'locale_mobile', 'mobile']),

                TextColumn::make('roles')
                    ->badge()
                    ->state(fn (User $user) => $user->roles->map(fn (RoleModel $role) => Role::from($role->name)?->label())->toArray())
                    ->limitList(1)
                    ->separator(),

                TextColumn::make('active')
                    ->label(__('app.input.active'))
                    ->badge()
                    ->icon(fn (User $user) => $user->active ? 'iconsax-bro-verify' : 'iconsax-bro-close-circle')
                    ->color(fn (User $user) => $user->active ? 'success' : 'danger')
                    ->getStateUsing(fn (User $category) => $category->active ? 'Active' : 'Inactive'),
            ])
            ->filtersTriggerAction(
                fn ($action) => $action
                    ->button()
                    ->label('Filter'),
            )
            ->filters([
                DateRangeFilter::make('created_at')
                    ->label(__('app.range'))
                    ->withIndicator()
                    ->placeholder(__('app.range'))
                    ->useRangeLabels(),

                SelectFilter::make('roles')
                    ->multiple()
                    ->preload()
                    ->label(__('user.user_roles'))
                    ->relationship('roles', 'name')
                    ->getOptionLabelFromRecordUsing(fn (RoleModel $role) => Role::from($role->name)->label()),

                TrashedFilter::make()->native(false),
            ])
            ->actions([
                Impersonate::make()
                    ->color('gray')
                    ->tooltip('Impersonate')
                    ->visible(
                        fn (User $category) => $category->hasAnyRole(Role::cases())
                    )
                    ->redirectTo(Filament::getUrl()),

                Tables\Actions\Action::make('logs')
                    ->visible(fn () => auth()->user()->isSuper())
                    ->iconButton()
                    ->icon('iconsax-bro-eye')
                    ->tooltip('Activities')
                    ->url(fn ($record) => UserResource::getUrl(
                        'logs', ['record' => $record])
                    ),

                Tables\Actions\EditAction::make()
                    ->modalWidth('lg')
                    ->iconButton()
                    ->icon('iconoir-page-edit')
                    ->tooltip(__('app.edit'))
                    ->form(User::getEditUserForm())
                    ->mutateFormDataUsing(
                        fn ($data) => User::mutateEditUserFormData($data)
                    ),

                Tables\Actions\Action::make('changeUserPassword')
                    ->iconButton()
                    ->color('danger')
                    ->requiresConfirmation()
                    ->icon('iconoir-lock-square')
                    ->tooltip(__('user.change_password'))
                    ->visible(fn () => auth()->user()->hasRole(Role::Admin))
                    ->authorize(fn () => auth()->user()->hasRole(Role::Admin))
                    ->form(User::getChangeUserPasswordForm())
                    ->action(
                        fn (array $data, User $user) => $user->changeUserPassword($data)
                    ),

                Tables\Actions\Action::make('setAsNotActive')
                    ->iconButton()
                    ->color('danger')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-profile-tick')
                    ->tooltip(__('user.deactivate'))
                    ->visible(fn (User $user) => $user->active && auth()->user()->hasRole(Role::Admin))
                    ->authorize(fn () => auth()->user()->hasRole(Role::Admin))
                    ->action(fn (User $user) => $user->setAsActive(false)),

                Tables\Actions\Action::make('setAsActive')
                    ->iconButton()
                    ->color('success')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-profile-remove')
                    ->tooltip(__('user.activate'))
                    ->visible(fn (User $user) => ! $user->active && auth()->user()->hasRole(Role::Admin))
                    ->authorize(fn () => auth()->user()->hasRole(Role::Admin))
                    ->action(fn (User $user) => $user->setAsActive()),

                Tables\Actions\DeleteAction::make()
                    ->iconButton()
                    ->icon('iconoir-trash')
                    ->tooltip(__('app.delete')),

                Tables\Actions\RestoreAction::make(),

                Tables\Actions\ForceDeleteAction::make()
                    ->visible(fn (User $user) => auth()->user()->isSuper() && $user->trashed()),
            ])
            ->bulkActions([
                ExportBulkAction::make()
                    ->authorize(fn () => auth()->user()->isSuper())
                    ->exports([
                        ExcelExport::make()
                            ->withFilename(now()->toDateTimeString().'-users')
                            ->withColumns(User::getExportColumns())
                            ->queue()->withChunkSize(1000),
                    ]),

                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
            ]);
    }
}
