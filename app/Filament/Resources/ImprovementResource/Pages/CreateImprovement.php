<?php

namespace App\Filament\Resources\ImprovementResource\Pages;

use Filament\Forms\Form;
use App\Models\Improvement;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ImprovementResource;

class CreateImprovement extends CreateRecord
{
    protected static string $resource = ImprovementResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('fill')
                ->icon('iconoir-magic-wand')
                ->outlined()
                ->hidden(app()->environment('production'))
                ->action(function ($livewire) {
                    $livewire->form->fill(Improvement::factory()->make()->toArray());
                }),

            ...parent::getFormActions(),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns(2)
                    ->schema([
                        FileUpload::make('before')
                            ->label(__('app.input.before'))
                            ->image()
                            ->required(),

                        FileUpload::make('after')
                            ->label(__('app.input.after'))
                            ->image()
                            ->required(),
                    ]),
            ]);
    }
}
