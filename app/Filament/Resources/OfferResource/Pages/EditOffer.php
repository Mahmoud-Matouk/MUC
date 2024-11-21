<?php

namespace App\Filament\Resources\OfferResource\Pages;

use Filament\Actions;
use Filament\Forms\Form;
use Filament\Forms\Components\Grid;
use Filament\Actions\LocaleSwitcher;
use Filament\Support\Enums\Alignment;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\OfferResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditOffer extends EditRecord
{
    use Translatable;

    protected static string $resource = OfferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label(__('offer.delete')),
            LocaleSwitcher::make(),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->columns(12)
                    ->schema([
                        Section::make()
                            ->columnSpan(8)
                            ->schema([
                                Grid::make()
                                    ->columns(3)
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('app.input.name'))
                                            ->placeholder(__('app.input.name'))
                                            ->required(),

                                        // TextInput::make('code')
                                        //     ->label(__('app.input.code'))
                                        //     ->placeholder(__('app.input.code'))
                                        //     ->required(),

                                        TextInput::make('original_price')
                                            ->label(__('app.input.original_price'))
                                            ->placeholder(__('app.input.original_price'))
                                            ->numeric()
                                            ->required(),

                                        TextInput::make('discount_percentage')
                                            ->label(__('app.input.discount_percentage'))
                                            ->placeholder(__('app.input.discount_percentage'))
                                            ->suffix('%')
                                            ->numeric()
                                            ->required(),

                                        RichEditor::make('description')
                                            ->label(__('app.input.description'))
                                            ->placeholder(__('app.input.description'))
                                            ->columnSpanFull()
                                            ->required(),

                                        Repeater::make('details')
                                            ->relationship('details')
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label(__('app.input.name'))
                                                    ->placeholder(__('app.input.name'))
                                                    ->required(),
                                            ])
                                            ->addActionLabel('Add detail')
                                            ->addActionAlignment(Alignment::Start)
                                            ->columnSpanFull()
                                            ->collapsible(),
                                    ])
                            ]),

                        Section::make()
                            ->columnSpan(4)
                            ->schema([
                                // DateTimePicker::make('start_date')
                                //     ->label(__('app.input.start_date'))
                                //     ->placeholder(__('app.input.start_date'))
                                //     ->after(now()),

                                // DateTimePicker::make('expiry_date')
                                //     ->label(__('app.input.expiry_date'))
                                //     ->placeholder(__('app.input.expiry_date'))
                                //     ->after('start_date'),

                                FileUpload::make('image')
                                    ->label(__('app.input.image'))
                                    ->image()
                                    ->required(),

                                // FileUpload::make('icon')
                                //     ->label(__('app.input.icon'))
                                //     ->image()
                                //     ->avatar()
                                //     ->required(),
                            ]),
                    ]),
            ]);
    }

    // protected function mutateFormDataBeforeFill(array $data): array
    // {
    //     $data['status'] = $data['expiry_date'] > now() ? OfferStatus::Valid : OfferStatus::Expired;

    //     return $data;
    // }

    // protected function mutateFormDataBeforeSave(array $data): array
    // {
    //     $data['status'] = $data['expiry_date'] > now() ? OfferStatus::Valid : OfferStatus::Expired;

    //     return $data;
    //     // return Offer::setOfferStatusBeforeCreate($data);
    // }

    // protected function getSavedNotification(): ?Notification
    // {
    //     return Notification::make()
    //         ->success()
    //         ->title('Offer updated')
    //         ->body('The user has been saved successfully.');
    // }
}
