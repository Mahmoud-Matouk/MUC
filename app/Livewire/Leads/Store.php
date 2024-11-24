<?php

namespace App\Livewire\Leads;

use App\Models\Lead;
use App\Models\Country;
use App\Models\Service;
use Livewire\Component;
use App\Models\Category;
use Filament\Forms\Form;
use Livewire\WithFileUploads;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Section;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Concerns\InteractsWithForms;
use Marvinosswald\FilamentInputSelectAffix\TextInputSelectAffix;

class Store extends Component implements HasForms
{
    use InteractsWithForms;
    use WithFileUploads;

    public ?string $name;
    public ?string $mobile;
    public ?string $city;
    public ?string $service_id;
    public ?array $image;
    public ?string $message;

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
                            ->required()
                            ->minLength(3)
                            ->maxLength(50)
                            ->extraInputAttributes([
                                'class' => 'bg-[#f2f3fa]',
                            ]),

                        TextInput::make('mobile')
                            ->label(__('app.input.mobile'))
                            ->placeholder(__('app.input.mobile'))
                            ->required()
                            ->maxLength(11)
                            ->minLength(8)
                            ->extraInputAttributes([
                                'class' => 'bg-[#f2f3fa]',
                            ]),

                        Select::make('city')
                            ->label(__('app.input.city'))
                            ->placeholder(__('app.input.city'))
                            ->options([
                                'insideRiyadh' => __('app.input.inside_riyadh'),
                                'outsideRiyadh' => __('app.input.outside_riyadh'),
                            ])
                            ->required()
                            ->extraInputAttributes([
                                'class' => 'bg-[#f2f3fa]',
                            ]),

                        Select::make('service_id')
                            ->label(__('app.input.service'))
                            ->placeholder(__('app.input.service'))
                            ->options(Service::where('active', true)->pluck('name', 'id'))
                            ->required()
                            ->extraInputAttributes([
                                'class' => 'bg-[#f2f3fa]',
                            ]),

                            FileUpload::make('image')
                            ->label(__('app.input.uploadImage'))
                            ->image()
                            ->required()
                            ->extraInputAttributes([
                                'class' => 'bg-[#f1f8fc] py-7 rounded-lg border text-center text-secondary-800 border-secondary-300 cursor-pointer w-full',
                            ]),

                        Textarea::make('message')
                            ->label(__('app.input.comment'))
                            ->placeholder(__('app.input.comment'))
                            ->rows(3)
                            ->extraInputAttributes([
                                'class' => 'bg-[#f2f3fa]',
                            ]),
                    ])
                    ->extraAttributes([
                        'class' => 'border-none shadow-none w-full',
                    ]),

                Actions::make([
                    Action::make('submit')
                        ->label(__('app.send'))
                        ->submit('create')
                        ->color('blue')
                        ->extraAttributes([
                            'class' => 'bg-secondary-800 hover:bg-secondary-700 text-white py-2 px-20 text-xs rounded-full transition duration-200',
                        ]),
                ])
                ->extraAttributes([
                    'class' => 'flex items-end w-full',
                ]),
            ]);
    }


    public function create(): void
    {
        // $this->validate([
        //     'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        // ]);

        // dd($this->form->getState());
        // dd($this->image);

        Lead::create([
            'name' => $this->name,
            'mobile' => $this->mobile,
            'city' => $this->city,
            'service_id' => $this->service_id,
            'image' => $this->image,
            'message' => $this->message ?? 'No message',
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
        // return view('livewire.leads.store', [
        //     'image' => $this->image,
        // ]);

        return view('livewire.leads.store');
    }
}
