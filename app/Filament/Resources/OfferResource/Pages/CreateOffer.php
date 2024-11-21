<?php

namespace App\Filament\Resources\OfferResource\Pages;

use App\Models\Offer;
use Filament\Forms\Form;
use App\Enums\OfferStatus;
use Filament\Actions\Action;
use Filament\Forms\Components\Grid;
use Filament\Actions\LocaleSwitcher;
use Filament\Forms\Components\Select;
use Filament\Support\Enums\Alignment;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\OfferResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\DateTimePicker;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateOffer extends CreateRecord
{
    use Translatable;
    protected static string $resource = OfferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
        ];
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('fill')
                ->icon('iconoir-magic-wand')
                ->outlined()
                ->hidden(app()->environment('production'))
                ->action(function ($livewire) {
                    $livewire->form->fill(Offer::factory()->make()->toArray());
                }),

            ...parent::getFormActions(),
        ];
    }

    public function form(Form $form): Form {
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
                                            ->reorderableWithButtons()
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

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     $data['status'] = $data['expiry_date'] > now() ? OfferStatus::Valid : OfferStatus::Expired;

    //     return $data;
    // }
}
