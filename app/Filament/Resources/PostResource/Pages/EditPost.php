<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Models\Tag;
use Filament\Forms;
use App\Models\Post;
use Filament\Actions;
use Filament\Forms\Form;
use App\Enums\PostStatus;
use Filament\Forms\Components\Textarea;
use App\Filament\Resources\PostResource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\RichEditor;
use Illuminate\Contracts\Support\Htmlable;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    public function getRecordTitle(): string|Htmlable
    {
        return $this->record->title;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make('editPost')
                    ->columns(12)
                    ->schema([
                        Section::make()
                            ->columnSpan(8)
                            ->schema([
                                TextInput::make('title')
                                    ->label(__('post.post_title'))
                                    ->placeholder(__('post.post_title'))
                                    ->autofocus()
                                    ->required()
                                    ->suffix(fn(Post $record) => $record->slug ? str(view('components.badge', [
                                        'label' => $record->slug,
                                        'color' => 'gray',
                                    ])->render())->toHtmlString() : null)
                                    ->maxLength(50),

                                Textarea::make('summary')
                                    ->label(__('post.summary'))
                                    ->placeholder(__('post.summary'))
                                    ->required()
                                    ->maxLength(250),

                                RichEditor::make('content')
                                    ->label(__('post.content'))
                                    ->placeholder(__('post.content'))
                                    ->required(),
                            ]),

                        Section::make()
                            ->columnSpan(4)
                            ->heading(
                                fn(Post $record) => str(view('components.badge', [
                                    'label' => $record->status->getLabel(),
                                    'color' => $record->status->getColor(),
                                    'icon' => $record->status->getIcon(),
                                ])->render())->toHtmlString()
                            )
                            ->headerActions([
                                Action::make('publish')
                                    ->color('success')
                                    ->label(__('post.publish_now'))
                                    ->requiresConfirmation()
                                    ->visible(fn(Post $record) => $record->status !== PostStatus::Published)
                                    ->action(fn(Post $record) => $record->publishNow()),

                                Action::make('hide')
                                    ->color('danger')
                                    ->label(__('post.hide_now'))
                                    ->requiresConfirmation()
                                    ->visible(fn(Post $record) => $record->status === PostStatus::Published)
                                    ->action(fn(Post $record) => $record->hideNow()),
                            ])
                            ->schema([
                                Select::make('author_id')
                                    ->native(false)
                                    ->relationship('author', 'name', fn($query) => $query->role('author'))
                                    ->label(__('post.author'))
                                    ->placeholder(__('post.author')),

                                Select::make('tags')
                                    ->native(false)
                                    ->multiple()
                                    ->relationship('tags', 'name')
                                    ->options(Tag::where('status', 'published')->pluck('name', 'id'))
                                    ->searchable()
                                    ->createOptionForm([
                                        TextInput::make('name')
                                            ->required(),
                                    ])
                                    ->label(__('post.tags'))
                                    ->placeholder(__('post.tags')),

                                FileUpload::make('image')
                                    ->image()
                                    ->imageEditor()
                                    ->directory('posts')
                                    ->label(__('post.image'))
                                    ->imageCropAspectRatio('2:1'),
                            ]),
                    ]),
            ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
