<?php

namespace App\Filament\Resources\BranchResource\Pages;

use App\Models\Branch;
use Filament\Tables\Table;
use Filament\Actions\CreateAction;
use Filament\Tables\Actions\Action;
use Filament\Actions\LocaleSwitcher;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BranchResource;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\ForceDeleteAction;

class ListBranches extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = BranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),

            CreateAction::make()
                ->modalWidth('xl')
                ->icon('iconsax-bro-add')
                ->label(__('branch.create'))
                ->modalHeading(__('branch.create'))
                ->form(Branch::getForm()),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(
                fn (Builder $query) => $query->withTrashed()->latest()
            )
            ->columns([
                ImageColumn::make('image')
                    ->label(__('app.input.image'))
                    ->defaultImageUrl(url(config('app.fallback.image')))
                    ->size(36),

                TextColumn::make('name')
                    ->label(__('branch.branch_name'))
                    ->description(fn ($record) => $record->mobile)
                    ->searchable(['name', 'mobile']),

                TextColumn::make('city.name')
                    ->label(__('app.input.city'))
                    ->description(fn ($record) => $record->address)
                    ->searchable(['city.name', 'address']),

                TextColumn::make('visible')
                    ->badge()
                    ->label(__('app.input.status'))
                    ->formatStateUsing(fn (Branch $branch) => $branch->visible ? __('app.visible') : __('app.hidden'))
                    ->icon(fn (Branch $branch) => $branch->visible ? 'iconsax-bro-eye' : 'iconsax-bro-eye-slash')
                    ->color(fn (Branch $branch) => $branch->visible ? 'success' : 'danger'),
            ])
            ->filtersTriggerAction(fn ($action) => $action->button()->label('Filter'))
            ->filters([
                TrashedFilter::make()->native(false),
            ])
            ->actions([
                EditAction::make()
                    ->iconButton()
                    ->modalWidth('lg')
                    ->icon('iconoir-page-edit')
                    ->tooltip(__('app.edit'))
                    ->stickyModalFooter()
                    ->form(Branch::getForm(true)),

                Action::make('visible')
                    ->iconButton()
                    ->color('success')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-eye')
                    ->tooltip(__('post.publish_now'))
                    ->visible(fn (Branch $record) => ! $record->visible)
                    ->action(fn (Branch $record) => $record->markAsVisible()),

                Action::make('hide')
                    ->iconButton()
                    ->color('danger')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-eye-slash')
                    ->tooltip(__('post.hide_now'))
                    ->visible(fn (Branch $record) => $record->visible)
                    ->action(fn (Branch $record) => $record->markAsVisible(false)),

                DeleteAction::make()
                    ->iconButton()
                    ->icon('iconsax-bro-trash')
                    ->tooltip(__('app.delete')),

                RestoreAction::make(),

                ForceDeleteAction::make()
                    ->visible(fn (Branch $branch) => auth()->user()->isSuper() && $branch->trashed()),
            ]);
    }
}
