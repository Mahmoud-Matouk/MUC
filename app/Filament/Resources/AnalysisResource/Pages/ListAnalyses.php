<?php

namespace App\Filament\Resources\AnalysisResource\Pages;

use App\Enums\Role;
use Filament\Actions;
use App\Models\Analysis;
use Filament\Tables\Table;
use Filament\Actions\LocaleSwitcher;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use App\Filament\Resources\AnalysisResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListAnalyses extends ListRecords
{
    use Translatable;
    protected static string $resource = AnalysisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label(__('analysis.create')),
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

                ImageColumn::make('image')
                    ->label(__('app.input.image'))
                    ->defaultImageUrl(url(config('app.fallback.image'))),

                TextColumn::make('name')
                    ->label(__('app.input.name'))
                    ->description(fn(Analysis $analysis) => strip_tags($analysis->description))
                    ->searchable(),

                    TextColumn::make('original_price')
                    ->label(__('app.input.original_price'))
                    ->description(fn (Analysis $analysis) => 'After Discount ' . intval($analysis->original_price - $analysis->original_price * ($analysis->discount_percentage / 100)) )
                    ->sortable(),

                TextColumn::make('discount_percentage')
                    ->label(__('app.input.discount_percentage'))
                    ->badge()
                    ->suffix(' %')
                    ->sortable(),

                TextColumn::make('active')
                    ->label(__('app.input.active'))
                    ->badge()
                    ->icon(fn (Analysis $analysis) => $analysis->active ? 'iconsax-bro-verify' : 'iconsax-bro-close-circle')
                    ->color(fn (Analysis $analysis) => $analysis->active ? 'success' : 'danger')
                    ->getStateUsing(fn (Analysis $analysis) => $analysis->active ? 'Active' : 'Inactive'),

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
                    ->visible(fn (Analysis $analysis) => $analysis->active && ! $analysis->trashed() && auth()->user()->hasRole(Role::Admin))
                    ->authorize(fn () => auth()->user()->hasRole(Role::Admin))
                    ->action(fn (Analysis $analysis) => $analysis->setAsActive(false)),

                Action::make('setAsActive')
                    ->iconButton()
                    ->color('success')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-shield-tick')
                    ->tooltip(__('user.activate'))
                    ->visible(fn (Analysis $analysis) => ! $analysis->active && ! $analysis->trashed() && auth()->user()->hasRole(Role::Admin))
                    ->authorize(fn () => auth()->user()->hasRole(Role::Admin))
                    ->action(fn (Analysis $analysis) => $analysis->setAsActive(true)),

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
