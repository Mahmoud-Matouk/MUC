<?php

namespace App\Livewire\Leads;

use App\Models\Lead;
use App\Models\Service;
use Livewire\Attributes\Validate;
use Livewire\Component;
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
use Illuminate\Support\Facades\Log;
use phpDocumentor\Reflection\Types\Integer;

class Store extends Component implements HasForms
{
    use InteractsWithForms;
    use WithFileUploads;

    public ?string $name;
    public ?string $mobile;
    public ?string $city;
    public ?array $image;
    public ?string $message;

    #[Validate('email')]
    public ?string $email;

    public ?string $service_id;

    public  $quantity;

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
                            ->maxLength(50),

                        TextInput::make('mobile')
                            ->label(__('app.input.mobile'))
                            ->placeholder(__('app.input.mobile'))
                            ->required()
                            ->maxLength(11)
                            ->minLength(8),
                        
                        TextInput::make('email')
                        ->label(__('app.input.email'))
                        ->placeholder(__('app.input.email'))
                        ->required()
                        ->email()
                        ,
                        Select::make('city')
                            ->label(__('app.input.city'))
                            ->placeholder(__('app.input.city'))
                            ->options([
                                'insideRiyadh' => __('app.input.inside_riyadh'),
                                'outsideRiyadh' => __('app.input.outside_riyadh'),
                            ])
                            ->required(),

                        Select::make('service_id')
                            ->label(__('app.input.service'))
                            ->placeholder(__('app.input.service'))
                            ->options(Service::active()->pluck('name','id'))
                            ->required(),
                        
                            TextInput::make('quantity')
                            ->numeric()
                            ->required()
                            ->label(__('app.input.quantity'))
                            ->placeholder(__('app.input.quantity')),
    
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
                            ->rows(3),
                    ]),

                Actions::make([
                    Action::make('submit')
                        ->label(__('app.send'))
                        ->submit('create')
                        ->color('blue')
                        ->extraAttributes([
                            'class' => 'bg-secondary-800 hover:bg-secondary-700 text-primary-800 py-2 px-20 text-xs rounded-full transition duration-200',
                        ]),
                ])
                ->extraAttributes([
                    'class' => 'flex items-end',
                ]),
            ]);
    }


    public function create(): void
    {
        Log::info($this->form->getState());
        Lead::create([
            'name' => $this->name,
            'mobile' => $this->mobile,
            'city' => $this->city,
            'quantity'=>$this->quantity,
            'email'=>$this->email,
            'service_id' => $this->service_id,
            'image' => $this->form->getState()['image'],
            'message' => $this->message ?? 'No message',
        ]);


        Notification::make()
            ->title(title: __('front.input.done'))
            ->success()
            ->color('success')
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
