<?php

namespace App\Filament\Resources\ImprovementResource\Pages;

use Filament\Actions;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\ImprovementResource;

class EditImprovement extends EditRecord
{
    protected static string $resource = ImprovementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label(__('improvement.delete')),
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
