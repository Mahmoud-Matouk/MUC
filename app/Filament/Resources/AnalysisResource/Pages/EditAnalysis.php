<?php

namespace App\Filament\Resources\AnalysisResource\Pages;

use Filament\Actions;
use Filament\Forms\Form;
use Filament\Forms\Components\Grid;
use Filament\Actions\LocaleSwitcher;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\AnalysisResource;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditAnalysis extends EditRecord
{
    use Translatable;
    protected static string $resource = AnalysisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label(__(key: 'analysis.delete')),
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
                                            ->autofocus()
                                            ->required()
                                            ->maxLength(50),

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
                                            ->required()
                                            ->columnSpanFull()
                                            ->maxLength(150),
                                    ])
                            ]),

                        Section::make()
                            ->columnSpan(4)
                            ->schema([
                                FileUpload::make('image')
                                    ->label(__('app.input.image'))
                                    ->image()
                                    ->required(),

                                Toggle::make('active')
                                    ->label(__('app.input.active'))
                                    ->onColor('success')
                                    ->offColor('danger')
                                    ->onIcon('iconoir-check')
                                    ->offIcon('heroicon-o-x-mark')
                                    ->inline(false),
                            ]),
                    ]),
            ]);
    }
}
