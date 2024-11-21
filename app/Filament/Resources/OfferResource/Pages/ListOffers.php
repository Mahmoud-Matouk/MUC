<?php

namespace App\Filament\Resources\OfferResource\Pages;

use App\Models\Offer;
use Filament\Actions;
use App\Enums\OfferStatus;
use App\Enums\Role;
use Filament\Tables\Table;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Components\Tab;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use App\Filament\Resources\OfferResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;
use Filament\Tables\Actions\Action;

class ListOffers extends ListRecords
{
    use Translatable;
    protected static string $resource = OfferResource::class;

    // public function getTabs(): array
    // {
    //     return [
    //         'all' => Tab::make('All'),

    //         'Valid' => Tab::make('Valid')
    //             ->modifyQueryUsing(fn($query) => $query->where('status', OfferStatus::Valid)),

    //         'Expired' => Tab::make('Expired')
    //             ->modifyQueryUsing(fn($query) => $query->where('status', OfferStatus::Expired)),
    //     ];
    // }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label(__('offer.create')),
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
                    ->defaultImageUrl(url(config('app.fallback.image'))),

                TextColumn::make('name')
                    ->label(__('app.input.name'))
                    ->searchable(),

                TextColumn::make('original_price')
                    ->label(__('app.input.original_price'))
                    ->description(fn(Offer $offer) => 'After Discount ' . intval($offer->original_price - $offer->original_price * ($offer->discount_percentage / 100)))
                    ->sortable(),

                TextColumn::make('discount_percentage')
                    ->label(__('app.input.discount_percentage'))
                    ->badge()
                    ->suffix(' %')
                    ->sortable(),

                // TextColumn::make('status')
                //     ->label(__('app.input.status'))
                //     ->badge()
                //     ->icon(fn(Offer $offer) => $offer->status == OfferStatus::Valid ? 'iconsax-bro-verify' : 'iconsax-bro-close-circle')
                //     ->color(fn(Offer $offer) => $offer->status == OfferStatus::Valid ? 'success' : 'danger')
                //     ->description(fn(Offer $offer) => $offer->expiry_date > now() ? 'Expires After ' . $offer->expiry_date->diffForHumans() : 'Expired Since ' . $offer->expiry_date->diffForHumans()),
                TextColumn::make('active')
                    ->label(__('app.input.active'))
                    ->badge()
                    ->icon(fn (Offer $offer) => $offer->active ? 'iconsax-bro-verify' : 'iconsax-bro-close-circle')
                    ->color(fn (Offer $offer) => $offer->active ? 'success' : 'danger')
                    ->getStateUsing(fn (Offer $offer) => $offer->active ? 'Active' : 'Inactive'),
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
                    ->visible(fn (Offer $offer) => $offer->active && ! $offer->trashed() && auth()->user()->hasRole(Role::Admin))
                    ->authorize(fn () => auth()->user()->hasRole(Role::Admin))
                    ->action(fn (Offer $offer) => $offer->setAsActive(false)),

                Action::make('setAsActive')
                    ->iconButton()
                    ->color('success')
                    ->requiresConfirmation()
                    ->icon('iconsax-bro-shield-tick')
                    ->tooltip(__('user.activate'))
                    ->visible(fn (Offer $offer) => ! $offer->active && ! $offer->trashed() && auth()->user()->hasRole(Role::Admin))
                    ->authorize(fn () => auth()->user()->hasRole(Role::Admin))
                    ->action(fn (Offer $offer) => $offer->setAsActive(true)),

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
