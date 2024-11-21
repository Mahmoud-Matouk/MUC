<?php

namespace App\Livewire\Leads;

use App\Models\Lead;
use App\Models\Country;
use App\Models\Service;
use Livewire\Component;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Section;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Concerns\InteractsWithForms;
use Marvinosswald\FilamentInputSelectAffix\TextInputSelectAffix;

class Store extends Component implements HasForms
{
    use InteractsWithForms;

    public ?string $name;

    public ?string $mobile;
    public ?string $mobile_code;

    public ?string $category_id;

    public ?string $service_id;

    public ?string $note;

    public function mount(): void
    {
        $this->form->fill();
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
                            ->hiddenLabel()
                            ->required()
                            ->maxLength(50),

                        TextInputSelectAffix::make('mobile')
                                ->label(__('app.input.mobile'))
                                ->placeholder(__('app.input.mobile'))
                                ->hiddenLabel()
                                ->required()
                                ->maxLength(11)
                                ->minLength(8)
                                ->position('suffix')
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
                            ->hiddenLabel()
                            ->options(Category::pluck('name', 'id'))
                            ->required(),

                        Select::make('service_id')
                            ->label(__('app.input.service'))
                            ->placeholder(__('app.input.service'))
                            ->hiddenLabel()
                            ->options(Service::pluck('name', 'id'))
                            ->required(),

                        Textarea::make('note')
                            ->label(__('app.input.note'))
                            ->placeholder(__('app.input.note'))
                            ->hiddenLabel()
                            ->rows(5)
                            ->columnSpanFull(),
                    ]),

                    Actions::make([
                        Action::make('submit')
                            ->label(__('app.reserve'))
                            ->submit('create')
                            ->color('gray'),
                    ]),
            ]);
    }

    public function create(): void
    {
        Lead::create([
            'name' => $this->name,
            'mobile' => $this->mobile,
            'mobile_code' => $this->mobile_code,
            'category_id' => $this->section_id ?? null,
            'service_id' => $this->service_id ?? null,
            'note' => $this->message ?? 'No note',
        ]);

        Notification::make()
            ->success()
            ->title(title: 'Your message has been sent successfully.')
            ->seconds(seconds: 3)
            ->send();

        $this->form->fill();

        session()->flash('success', 'Your message has been sent successfully.');
    }

    public function render()
    {
        return view('livewire.leads.store');
    }
}
