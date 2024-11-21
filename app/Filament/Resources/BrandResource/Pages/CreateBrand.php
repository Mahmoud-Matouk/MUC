<?php

namespace App\Filament\Resources\BrandResource\Pages;

use App\Filament\Resources\BrandResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Brand;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateBrand extends CreateRecord
{
    use Translatable;
    protected static string $resource = BrandResource::class;

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
                    $livewire->form->fill(Brand::factory()->make()->toArray());
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
                        TextInput::make('name')
                            ->label(__('app.input.name'))
                            ->placeholder(__('app.input.name'))
                            ->autofocus()
                            ->required()
                            ->maxLength(50),

                        TextInput::make('description')
                            ->label(__('app.input.description'))
                            ->placeholder(__('app.input.description'))
                            ->required()
                            ->maxLength(150),

                        TextInput::make('primary_color')
                            ->label(__('app.input.primary_color'))
                            ->placeholder(__('app.input.primary_color'))
                            ->required()
                            ->maxLength(7),

                        TextInput::make('secondary_color')
                            ->label(__('app.input.secondary_color'))
                            ->placeholder(__('app.input.secondary_color'))
                            ->required()
                            ->maxLength(7),

                        FileUpload::make('logo')
                            ->label(__('app.input.logo'))
                            ->image()
                            ->required(),
                    ]),
            ]);
    }
}
