<?php

namespace App\Filament\Resources\BranchResource\Pages;

use App\Models\City;
use App\Models\Branch;
use Filament\Forms\Form;
use Filament\Actions\Action;
use App\Filament\Resources\BranchResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBranch extends CreateRecord
{
    protected static string $resource = BranchResource::class;

    public function getTitle(): string
    {
        return __('branch.create');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('fill')
                ->outlined()
                ->icon('iconoir-magic-wand')
                ->hidden(app()->environment('production'))
                ->action(function ($livewire) {
                    $livewire?->form->fill([
                        'name' => fake()->streetName,
                        'address' => fake()->address,
                        'city_id' => City::inRandomOrder()->first()->id,
                    ]);
                }),

            ...parent::getFormActions(),
        ];
    }

    public function form($form): Form
    {
        return $form->schema(Branch::getForm());
    }
}
