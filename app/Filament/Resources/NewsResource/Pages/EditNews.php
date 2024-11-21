<?php

namespace App\Filament\Resources\NewsResource\Pages;

use Filament\Actions;
use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use App\Filament\Resources\NewsResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditNews extends EditRecord
{
    use Translatable;
    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label(__('news.delete')),
                LocaleSwitcher::make(),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns()
                    ->schema([
                        TextInput::make('title')
                            ->autofocus()
                            ->required()
                            ->maxLength(50),

                        TextInput::make('description')
                            ->required()
                            ->maxLength(250),

                    ]),

                Section::make()
                    ->columns(1)
                    ->schema([
                        RichEditor::make('content')
                            ->required(),
                        FileUpload::make('image')
                            ->required()
                            ->image(),
                    ]),
            ]);
    }
}
