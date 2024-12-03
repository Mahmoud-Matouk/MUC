<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Enums\Role;
use Filament\Actions;
use App\Models\Service;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use App\Filament\Resources\ServiceResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;

class ListServices extends ListRecords
{
    use Translatable;
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label(__('service.create')),
            LocaleSwitcher::make(),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->poll('20s')
            ->striped()
            ->persistFiltersInSession()
            ->modifyQueryUsing(fn (Builder $query) => $query->withTrashed()->latest())
            ->columns([
                // ImageColumn::make('icon')
                //     ->label(__('app.input.icon'))
                //     ->circular()
                //     ->defaultImageUrl(url(config('app.fallback.anonymous'))),

                TextColumn::make('name')
                    ->label(__('app.input.name'))
                    ->description(fn (Service $service) => str($service->description)->limit(50))
                    ->limit(50)
                    ->searchable(),

                TextColumn::make('active')
                    ->label(__('app.input.active'))
                    ->badge()
                    ->icon(fn (Service $service) => $service->active ? 'iconsax-bro-verify' : 'iconsax-bro-close-circle')
                    ->color(fn (Service $service) => $service->active ? 'success' : 'danger')
                    ->getStateUsing(fn (Service $service) => $service->active ? 'Active' : 'Inactive'),
            ])
            ->filtersTriggerAction(fn ($action) => $action->button()->label('Filter'))
            ->filters([
                TrashedFilter::make()->native(false),
            ])->actions([
                Action::make('setAsNotActive')
                    ->iconButton()
                    ->color('danger')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-shield-cross')
                    ->tooltip(__('user.deactivate'))
                    ->visible(fn (Service $service) => $service->active && auth()->user()->hasRole(Role::Admin))
                    ->authorize(fn () => auth()->user()->hasRole(Role::Admin))
                    ->action(fn (Service $service) => $service->setAsActive(false)),

                Action::make('setAsActive')
                    ->iconButton()
                    ->color('success')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-shield-tick')
                    ->tooltip(__('user.activate'))
                    ->visible(fn (Service $service) => ! $service->active && auth()->user()->hasRole(Role::Admin))
                    ->authorize(fn () => auth()->user()->hasRole(Role::Admin))
                    ->action(fn (Service $service) => $service->setAsActive()),

                DeleteAction::make()
                    ->iconButton()
                    ->icon('iconsax-bro-trash')
                    ->tooltip(__('app.delete')),

                RestoreAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
