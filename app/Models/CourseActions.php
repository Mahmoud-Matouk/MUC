<?php

namespace App\Models;

use Filament\Forms\Set;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\CourseResource;
use Filament\Forms\Components\Actions\Action;

trait CourseActions
{
    public function markAsVisible(?bool $visible = true): void
    {
        $this->update([
            'visible' => $visible,
        ]);
    }

    public static function getForm(bool $edit = false): array
    {
        return [
            Grid::make()
                ->columns()
                ->schema([
                    TextInput::make('name')
                        ->label(__('course.name'))
                        ->placeholder(__('course.name'))
                        ->autofocus()
                        ->required()
                        ->maxLength(50)
                        ->unique(CourseResource::getModel(), 'name', ignoreRecord: $edit),

                    TextInput::make('description')
                        ->label(__('app.input.description'))
                        ->placeholder(__('app.input.description'))
                        ->required()
                        ->maxLength(100)
                        ->unique(CourseResource::getModel(), 'description', ignoreRecord: $edit),

                    TextInput::make('hours')
                        ->label(__('course.hours'))
                        ->placeholder(__('course.hours'))
                        ->numeric()
                        ->required(),

                    TextInput::make('price')
                        ->label(__('app.input.price'))
                        ->placeholder(__('app.input.price'))
                        ->numeric()
                        ->required(),

                    TextInput::make('original_price')
                        ->label(__('app.input.original_price'))
                        ->placeholder(__('app.input.original_price'))
                        ->numeric()
                        ->nullable(),

                    FileUpload::make('image')
                        ->label(__('app.input.image'))
                        ->placeholder(__('app.input.image'))
                        ->image()
                        ->nullable()
                        ->imageEditor()
                        ->directory('courses')
                        ->imageCropAspectRatio('3:2'),

                    Actions::make([
                        Action::make('fill')
                            ->icon('iconsax-bro-magicpen')
                            ->outlined()
                            ->hidden(app()->environment('production'))
                            ->action(function (Set $set) {
                                $record = Course::factory()->make();

                                $set('name', $record->name);
                                $set('description', $record->description);
                                $set('hours', $record->hours);
                                $set('price', $record->price);
                                $set('original_price', $record->original_price);
                            }),
                    ]),
                ]),
        ];
    }
}
