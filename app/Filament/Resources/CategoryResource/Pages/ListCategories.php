<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Enums\Role;
use Filament\Actions;
use App\Models\Category;
use Filament\Actions\LocaleSwitcher;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use App\Filament\Resources\CategoryResource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListCategories extends ListRecords
{
    use Translatable;
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label(__('category.create')),

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

                ImageColumn::make('icon')
                    ->label(__('app.input.icon'))
                    ->circular()
                    ->defaultImageUrl(url(config('app.fallback.anonymous'))),

                TextColumn::make('name')
                    ->label(__('app.input.name'))
                    ->description(fn (Category $category) => str($category->description)->limit(50))
                    ->limit(50)
                    ->searchable(),

                TextColumn::make('active')
                    ->label(__('app.input.active'))
                    ->badge()
                    ->icon(fn (Category $category) => $category->active ? 'iconsax-bro-verify' : 'iconsax-bro-close-circle')
                    ->color(fn (Category $category) => $category->active ? 'success' : 'danger')
                    ->getStateUsing(fn (Category $category) => $category->active ? 'Active' : 'Inactive'),
            ])
            ->filtersTriggerAction(fn ($action) => $action->button()->label('Filter'))
            ->filters([
                TrashedFilter::make()->native(false),
            ])
            ->actions([
                Action::make('setAsNotActive')
                    ->iconButton()
                    ->color('danger')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-shield-cross')
                    ->tooltip(__('user.deactivate'))
                    ->visible(fn (Category $category) => $category->active && ! $category->trashed() && auth()->user()->hasRole(Role::Admin))
                    ->authorize(fn () => auth()->user()->hasRole(Role::Admin))
                    ->action(fn (Category $category) => $category->setAsActive(false)),

                Action::make('setAsActive')
                    ->iconButton()
                    ->color('success')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-shield-tick')
                    ->tooltip(__('user.activate'))
                    ->visible(fn (Category $category) => ! $category->active && ! $category->trashed() && auth()->user()->hasRole(Role::Admin))
                    ->authorize(fn () => auth()->user()->hasRole(Role::Admin))
                    ->action(fn (Category $category) => $category->setAsActive(true)),

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
