<?php

namespace App\Filament\Resources\LeadResource\Pages;

use App\Models\Lead;
use App\Models\Country;
use App\Models\Service;
use App\Models\Category;
use Filament\Forms\Form;
use Random\RandomException;
use Filament\Actions\Action;
use Filament\Actions\LocaleSwitcher;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use App\Filament\Resources\LeadResource;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;
use Marvinosswald\FilamentInputSelectAffix\TextInputSelectAffix;

class CreateLead extends CreateRecord
{
    // use Translatable;
    protected static string $resource = LeadResource::class;

    public function getTitle(): string
    {
        return __('lead.create');
    }

    protected function getHeaderActions(): array
    {
        return [
            // LocaleSwitcher::make(),
        ];
    }

    public function getFormActions(): array
    {
        return [
            Action::make('fill')
                ->outlined()
                ->icon('iconoir-magic-wand')
                ->hidden(app()->environment('production'))
                ->action(function ($livewire) {
                    $livewire->form->fill(Lead::factory()->make()->toArray());
                }),

            ...parent::getFormActions(),
        ];
    }

    public function form($form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns([
                        'xs' => 1,
                        'sm' => 1,
                        'lg' => 2,
                    ])
                    ->schema([
                        TextInput::make('name')
                            ->label(__('app.input.name'))
                            ->placeholder(__('app.input.name'))
                            ->required()
                            ->maxLength(50),

                        TextInputSelectAffix::make('mobile')
                                ->label(__('app.input.mobile'))
                                ->placeholder(__('app.input.mobile'))
                                ->required()
                                ->maxLength(11)
                                ->minLength(8)
                                ->position('prefix')
                                ->select(fn() => Select::make('mobile_code')
                                    ->placeholder('Code')
                                    ->position('prefix')
                                    ->required()
                                    ->extraAttributes([
                                        'class' => 'w-[78px]',
                                    ])
                                    ->options(Country::getMobileCodeCountries())),

                        Select::make('category_id')
                            ->label(__('app.input.category'))
                            ->placeholder(__('app.input.category'))
                            ->options(Category::pluck('name', 'id'))
                            ->required(),

                        Select::make('service_id')
                            ->label(__('app.input.service'))
                            ->placeholder(__('app.input.service'))
                            ->options(Service::pluck('name', 'id'))
                            ->required(),

                        Textarea::make('note')
                            ->label(__('app.input.note'))
                            ->placeholder(__('app.input.note'))
                            ->rows(5)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    // /**
    //  * @throws RandomException
    //  */
    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     $customer = User::where('mobile', full_mobile($data['mobile'], $data['mobile_code'] ?? null))
    //         ->when($data['email'], fn ($query) => $query->orWhere('email', $data['email']))
    //         ->first();

    //     if ($customer) {
    //         $data['customer_id'] = $customer->id;
    //     }

    //     if (! isset($data['customer_id'])) {
    //         $data = User::mutateFormDataBeforeCreate($data);
    //         $customer = User::create(collect($data)->except('customer_id', 'course_id')->toArray());

    //         $data['customer_id'] = $customer->id;
    //     }

    //     return [
    //         'customer_id' => $data['customer_id'],
    //         'course_id' => $data['course_id'],
    //         'creator_id' => auth()->id(),
    //     ];
    // }
}
