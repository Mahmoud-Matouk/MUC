<?php

namespace App\Filament\Resources\LeadResource\Pages;

use App\Models\Lead;
use Filament\Actions;
use App\Enums\LeadStatus;
use Filament\Tables\Table;
use Filament\Actions\LocaleSwitcher;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\LeadResource;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListLeads extends ListRecords
{
    // use Translatable;
    protected static string $resource = LeadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            // LocaleSwitcher::make(),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordUrl(fn (Lead $record) => route(
                'filament.admin.resources.leads.view',
                ['record' => $record]
            ))
            ->columns([
                TextColumn::make('name')
                    ->label(__('app.input.customer'))
                    ->searchable([
                        'name', 'mobile', 'email',
                    ]),

                // TextColumn::make('email')
                //     ->label(__('app.input.contacts'))
                //     ->description(fn ($record) => $record->mobile)
                //     ->copyable()
                //     ->searchable([
                //         'email',
                //     ]),

                TextColumn::make('service.name')
                    ->label(__('app.input.service'))
                    ->state(fn (Lead $record) => $record->service->name ?? '--')
                    ->searchable([
                        'service.name',
                    ]),

                // TextColumn::make('category.name')
                //     ->label(__('app.input.category'))
                //     ->state(fn (Lead $record) => $record->category->name ?? '--')
                //     ->searchable([
                //         'category.name',
                //     ]),

                TextColumn::make('status')
                    ->label(__('app.input.status'))
                    ->badge(fn (Lead $record) => $record->status->getLabel())
                    ->icon(fn (Lead $record) => $record->status->getIcon())
                    ->color(fn (Lead $record) => $record->status->getColor()),

                TextColumn::make('created_at')
                    ->label(__('app.input.time'))
                    ->since(),

                ImageColumn::make('agent.avatar')
                    ->label('')
                    ->circular()
                    ->size(36)
                    ->grow(false)
                    ->defaultImageUrl(fn ($record) => $record->agent?->name ? url('/app/avatars/0.svg') : url('/app/fallback/anonymous.png')),

                TextColumn::make('agent.name')
                    ->label(__('lead.agent'))
                    ->state(fn (Lead $record) => $record->agent?->name ?? '--')
                    ->description(fn (Lead $record) => $record->agent?->email)
                    ->searchable([
                        'agent.name', 'agent.mobile', 'agent.email',
                    ]),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label(__('app.input.status'))
                    ->placeholder(__('app.input.status'))
                    ->options(LeadStatus::toSelectArray()),

                TrashedFilter::make()->native(false),
            ])->actions([
                EditAction::make()
                ->iconButton()
                ->icon('iconoir-page-edit')
                ->tooltip(__('app.edit')),
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
