<?php

namespace App\Filament\Resources\BundleResource\Pages;

use Filament\Actions;
use App\Models\Analysis;
use Filament\Forms\Form;
use Filament\Forms\Components\Grid;
use Filament\Actions\LocaleSwitcher;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\BundleResource;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditBundle extends EditRecord
{
    use Translatable;
    protected static string $resource = BundleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label(__(key: 'bundle.delete')),
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
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('app.input.name'))
                                            ->placeholder(__('app.input.name'))
                                            ->autofocus()
                                            ->required()
                                            ->maxLength(50),

                                        TextInput::make('original_price')
                                            ->label(__('app.input.price'))
                                            ->placeholder(__('app.input.price'))
                                            ->numeric()
                                            ->required(),

                                        RichEditor::make('description')
                                            ->label(__('app.input.description'))
                                            ->placeholder(__('app.input.description'))
                                            ->required()
                                            ->columnSpanFull()
                                            ->required(),
                                    ])
                            ]),

                        Section::make()
                            ->columnSpan(4)
                            ->schema([
                                Select::make('analysis')
                                    ->label(__('app.input.analysis'))
                                    ->preload()
                                    ->multiple()
                                    ->relationship('analyses', 'name'),

                                FileUpload::make('image')
                                    ->label(__('app.input.image'))
                                    ->image()
                                    ->columnSpanFull()
                                    ->required(),

                                Toggle::make('is_home_service')
                                    ->label(__('app.input.is_home_service'))
                                    ->onColor('success')
                                    ->offColor('danger')
                                    ->onIcon('iconoir-check')
                                    ->offIcon('heroicon-o-x-mark')
                                    ->inline(false)
                                    ->required(),
                            ]),
                    ]),
            ]);
    }
}
