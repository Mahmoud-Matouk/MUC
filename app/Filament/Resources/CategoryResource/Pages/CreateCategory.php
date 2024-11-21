<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Models\Category;
use Filament\Forms\Form;
use Illuminate\Support\Str;
use Filament\Actions\Action;
use Filament\Actions\LocaleSwitcher;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\CategoryResource;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateCategory extends CreateRecord
{
    use Translatable;

    protected static string $resource = CategoryResource::class;

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
                    $livewire->form->fill(Category::factory()->make()->toArray());
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
                        TextInput::make('name')
                            ->label(__('app.input.name'))
                            ->placeholder(__('app.input.name'))
                            ->required()
                            ->maxLength(255),

                        TextInput::make('description')
                            ->label(__('app.input.description'))
                            ->placeholder(__('app.input.description'))
                            ->required()
                            ->maxLength(255),

                        FileUpload::make('icon')
                            ->label(__('app.input.icon'))
                            ->image()
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

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::slug($this->form->getState()['name']);

        return $data;
    }
}
