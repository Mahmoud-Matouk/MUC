<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use Filament\Actions;
use Filament\Forms\Form;
use Filament\Actions\LocaleSwitcher;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\CategoryResource;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditCategory extends EditRecord
{
    use Translatable;
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label(__('category.delete')),

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
                        TextInput::make('name')
                            ->label(__('app.input.name'))
                            ->placeholder(__('app.input.name'))
                            ->autofocus()
                            ->required()
                            ->maxLength(50),

                        TextInput::make('description')
                            ->label(__('app.input.description'))
                            ->placeholder(__('app.input.description'))
                            ->required(),

                        FileUpload::make('icon')
                            ->label(__('app.input.icon'))
                            ->image()
                            ->required()
                            ->avatar(),

                        // Toggle::make('active')
                        //     ->label(__('app.input.active'))
                        //     ->onColor('success')
                        //     ->offColor('danger')
                        //     ->onIcon('iconoir-check')
                        //     ->offIcon('heroicon-o-x-mark')
                        //     ->inline(false)
                        //     ->required(),
                    ]),
            ]);
    }
}
