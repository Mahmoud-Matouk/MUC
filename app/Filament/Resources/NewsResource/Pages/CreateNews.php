<?php

namespace App\Filament\Resources\NewsResource\Pages;

use App\Models\News;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Illuminate\Support\Str;
use Filament\Actions\Action;
use Filament\Forms\Components\Section;
use App\Filament\Resources\NewsResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateNews extends CreateRecord
{
    use Translatable;
    protected static string $resource = NewsResource::class;

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
                    $livewire->form->fill(News::factory()->make()->toArray());
                }),

            ...parent::getFormActions(),
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

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($this->form->getState()['title']);
        return $data;
    }
}
