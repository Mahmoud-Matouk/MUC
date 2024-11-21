<?php

namespace App\Filament\Resources\TeamResource\Pages;

use App\Models\Team;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Filament\Forms\Components\Section;
use App\Filament\Resources\TeamResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateTeam extends CreateRecord
{
    use Translatable;
    protected static string $resource = TeamResource::class;

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
                    $livewire->form->fill(Team::factory()->make()->toArray());
                }),

            ...parent::getFormActions(),
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
