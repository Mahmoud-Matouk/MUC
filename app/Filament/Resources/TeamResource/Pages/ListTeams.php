<?php

namespace App\Filament\Resources\TeamResource\Pages;

use App\Filament\Resources\TeamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Enums\Role;
use App\Models\Team;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;

class ListTeams extends ListRecords
{
    use Translatable;
    protected static string $resource = TeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label(__('team.create')),
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
                ImageColumn::make('avatar')
                    ->label(__('app.input.avatar'))
                    ->circular()
                    ->defaultImageUrl(url(config('app.fallback.anonymous'))),

                TextColumn::make('name')
                    ->label(__('app.input.name'))
                    ->description(fn (Team $employer) => str($employer->experience)->limit(50))
                    ->limit(50),

                TextColumn::make('position')
                    ->label(__('app.input.position'))
                    ->badge()

            ])
            ->filtersTriggerAction(fn ($action) => $action->button()->label('Filter'))
            ->filters([
                TrashedFilter::make()->native(false),
            ])
            ->actions([
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
