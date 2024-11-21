<?php

namespace App\Filament\Resources\TeamResource\Pages;

use App\Filament\Resources\TeamResource;
use Filament\Actions;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditTeam extends EditRecord
{
    use Translatable;
    protected static string $resource = TeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label(__('team.delete')),

            LocaleSwitcher::make(),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns(3)
                    ->schema([
                        TextInput::make('name')
                            ->label(__('app.input.name'))
                            ->placeholder(__('app.input.name'))
                            ->required(),

                        TextInput::make('position')
                            ->label(__('app.input.position'))
                            ->placeholder(__('app.input.position'))
                            ->required(),

                        TextInput::make('experience')
                            ->label(__('app.input.experience'))
                            ->placeholder(__('app.input.experience'))
                            ->required(),

                        FileUpload::make('avatar')
                            ->label(__('app.input.avatar'))
                            ->image()
                            ->avatar()
                            ->required(),
                    ]),
            ]);
    }
}
