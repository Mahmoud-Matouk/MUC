<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Models\Post;
use Filament\Actions;
use App\Enums\PostStatus;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\PostResource;
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
use Filament\Pages\Concerns\ExposesTableToWidgets;
use App\Filament\Resources\PostResource\Widgets\PostChartWidget;
use App\Filament\Resources\PostResource\Widgets\PostStatsWidget;

class ListPosts extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = PostResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            PostStatsWidget::class,
            PostChartWidget::class,
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label(__('post.create')),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->poll('20s')
            ->striped()
            ->persistFiltersInSession()
            ->modifyQueryUsing(
                fn (Builder $query) => $query->withTrashed()->latest()
            )
            ->columns([
                ImageColumn::make('image')
                ->label(__('app.input.image'))
                ->defaultImageUrl(url(config('app.fallback.image'))),

                TextColumn::make('title')
                    ->label(__('post.post_title'))
                    ->description(fn (Post $record) => str($record->summary)->limit(50))
                    ->limit(50)
                    ->searchable(),

                TextColumn::make('status')
                    ->label(__('app.input.status'))
                    ->badge(fn (Post $record) => $record->status->getLabel())
                    ->icon(fn (Post $record) => $record->status->getIcon())
                    ->color(fn (Post $record) => $record->status->getColor()),

                TextColumn::make('published_at')
                    ->label(__('post.published_at'))
                    ->getStateUsing(fn (Post $record
                    ) => $record->tobe_published_at?->ago() ?? $record->published_at?->ago() ?? __('post.not_published'))
                    ->description(fn (Post $record) => $record->tobe_published_at?->format('Y-m-d H:i') ?? $record->published_at?->format('Y-m-d H:i') ?? '--'),

                ImageColumn::make('author.avatar')
                    ->label(__('app.input.avatar'))
                    ->circular()
                    ->defaultImageUrl(url(config('app.fallback.anonymous'))),

                TextColumn::make('author.name')
                    ->label(__('post.author'))
                    ->getStateUsing(fn (Post $record) => $record->author?->name ?? __('post.no_author'))
                    ->description(fn (Post $record) => $record->author?->email ?? '--')
                    ->searchable(),
            ])
            ->filtersTriggerAction(fn ($action) => $action->button()->label('Filter'))
            ->filters([
                SelectFilter::make('status')
                    ->label(__('app.input.status'))
                    ->placeholder(__('app.input.status'))
                    ->options(PostStatus::toSelectArray()),

                TrashedFilter::make()->native(false),
            ])->actions([
                Action::make('publish')
                    ->iconButton()
                    ->color('success')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-wifi')
                    ->tooltip(__('post.publish_now'))
                    ->visible(fn (Post $record) => $record->status !== PostStatus::Published)
                    ->action(fn (Post $record) => $record->publishNow()),

                Action::make('hide')
                    ->iconButton()
                    ->color('danger')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-eye-slash')
                    ->tooltip(__('post.hide_now'))
                    ->visible(fn (Post $record) => $record->status === PostStatus::Published)
                    ->action(fn (Post $record) => $record->hideNow()),

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
