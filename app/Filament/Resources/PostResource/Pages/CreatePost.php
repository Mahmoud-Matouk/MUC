<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Models\Post;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Filament\Forms\Components\Section;
use App\Filament\Resources\PostResource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    public function getTitle(): string
    {
        return __('post.create');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('fill')
                ->icon('iconoir-magic-wand')
                ->outlined()
                ->hidden(app()->environment('production'))
                ->action(function ($livewire) {
                    $livewire->form->fill(Post::factory()->make()->toArray());
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
                            ->label(__('post.post_title'))
                            ->placeholder(__('post.post_title'))
                            ->autofocus()
                            ->required()
                            ->maxLength(50),

                        TextInput::make('summary')
                            ->label(__('post.summary'))
                            ->placeholder(__('post.summary'))
                            ->required()
                            ->maxLength(250),
                    ]),

                Section::make()
                    ->columns(1)
                    ->schema([
                        RichEditor::make('content')
                            ->label(__('post.content'))
                            ->placeholder(__('post.content'))
                            ->required(),
                    ]),

                Section::make()
                    ->columns(1)
                    ->schema([
                        FileUpload::make('image')
                            ->label(__('app.input.image'))
                            ->image()
                            ->required(),
                    ]),
            ]);
    }
}
