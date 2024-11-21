<?php

namespace App\Filament\Resources\ImprovementResource\Pages;

use App\Enums\Role;
use Filament\Actions;
use App\Models\Service;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use App\Filament\Resources\ImprovementResource;

class ListImprovements extends ListRecords
{
    protected static string $resource = ImprovementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label(__('improvement.create')),
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
                ImageColumn::make('before')
                    ->label(__('app.input.before'))
                    ->defaultImageUrl(url(config('app.fallback.image'))),

                ImageColumn::make('after')
                    ->label(__('app.input.after'))
                    ->defaultImageUrl(url(config('app.fallback.image'))),
            ])
            ->filtersTriggerAction(fn ($action) => $action->button()->label('Filter'))
            ->filters([
                TrashedFilter::make()->native(false),
            ])->actions([
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
