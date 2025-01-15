<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Models\Service;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ServiceResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateService extends CreateRecord
{
    use Translatable;
    protected static string $resource = ServiceResource::class;

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
                    $livewire->form->fill(Service::factory()->make()->toArray());
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
                            ->maxLength(150),

                        // Select::make('category_id')
                        //     ->label(__('app.input.category'))
                        //     ->relationship(
                        //         'category',
                        //         'name',
                        //         fn($query) => $query->where('active', true)
                        //     ),

                        // FileUpload::make('icon')
                        //     ->label(__('app.input.icon'))
                        //     ->image()
                        //     ->avatar()
                        //     ->required(),
                    ]),
            ]);
    }

    public function mutateFormDataBeforeCreate(array $data): array{
        $data['icon']='iconoir-magic-wand';
        return $data;
    }
}
