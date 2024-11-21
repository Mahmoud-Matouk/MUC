<?php

namespace App\Filament\Resources\BundleResource\Pages;

use App\Filament\Resources\BundleResource;
use Filament\Actions;
use App\Models\Bundle;
use App\Enums\Role;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;

class ListBundles extends ListRecords
{
    use Translatable;
    protected static string $resource = BundleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label(__('bundle.create')),
            LocaleSwitcher::make(),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->poll('20s')
            ->striped()
            ->persistFiltersInSession()
            ->modifyQueryUsing(fn(Builder $query) => $query->withTrashed()->latest())
            ->columns([
                ImageColumn::make('image')
                    ->label(__('app.input.image'))
                    ->defaultImageUrl(url(config('app.fallback.anonymous'))),

                TextColumn::make('name')
                    ->label(__('app.input.name'))
                    ->description(fn(Bundle $bundle) => strip_tags($bundle->description))
                    ->limit(50)
                    ->searchable(),

                TextColumn::make('original_price')
                    ->label(__('app.input.price'))
                    ->description(fn (Bundle $bundle) => 'After Discount ' . intval($bundle->original_price - $bundle->original_price * ($bundle->discount_percentage / 100)) )
                    ->sortable(),

                TextColumn::make('is_home_service')
                    ->label(__('app.input.is_home_service'))
                    ->badge()
                    ->icon(fn(Bundle $bundle) => $bundle->is_home_service ? 'iconsax-bro-verify' : 'iconsax-bro-close-circle')
                    ->color(fn(Bundle $bundle) => $bundle->is_home_service ? 'success' : 'danger')
                    ->getStateUsing(fn(Bundle $bundle) => $bundle->is_home_service ? 'Yes' : 'No'),

                TextColumn::make('active')
                    ->label(__('app.input.active'))
                    ->badge()
                    ->icon(fn(Bundle $bundle) => $bundle->active ? 'iconsax-bro-verify' : 'iconsax-bro-close-circle')
                    ->color(fn(Bundle $bundle) => $bundle->active ? 'success' : 'danger')
                    ->getStateUsing(fn(Bundle $bundle) => $bundle->active ? 'Active' : 'Inactive'),

            ])
            ->filtersTriggerAction(fn($action) => $action->button()->label('Filter'))
            ->filters([
                TrashedFilter::make()->native(false),
            ])->actions([
                Action::make('setAsNotActive')
                    ->iconButton()
                    ->color('danger')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-shield-cross')
                    ->tooltip(__('user.deactivate'))
                    ->visible(fn(Bundle $bundle) => $bundle->active && auth()->user()->hasRole(Role::Admin))
                    ->authorize(fn() => auth()->user()->hasRole(Role::Admin))
                    ->action(fn(Bundle $bundle) => $bundle->setAsActive(false)),

                Action::make('setAsActive')
                    ->iconButton()
                    ->color('success')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-shield-tick')
                    ->tooltip(__('user.activate'))
                    ->visible(fn(Bundle $bundle) => ! $bundle->active && auth()->user()->hasRole(Role::Admin))
                    ->authorize(fn() => auth()->user()->hasRole(Role::Admin))
                    ->action(fn(Bundle $bundle) => $bundle->setAsActive()),

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
