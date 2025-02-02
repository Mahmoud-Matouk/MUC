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

                        TextInput::make('email')
                            ->label(__('app.input.email'))
                            ->placeholder(__('app.input.email'))
                            ->required()
                            ->email(),

                            TextInput::make('password')
                                ->label(__('app.input.password'))
                                ->placeholder(__('app.input.password'))
                                ->password()
                                ->required()
                                ->minLength(8)
                                ->maxLength(32)
                                ->rules(['regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'])
                                ->confirmed()
                                ->suffixIcon(function ($get) {
                                    return $get('showPassword') ? 'heroicon-s-eye-slash' : 'heroicon-s-eye';
                                })
                                ->suffixIconColor('primary')
                                ->extraAttributes([
                                    'x-data' => '{ showPassword: false }',
                                    'x-on:click' => 'showPassword = !showPassword',
                                    ':type' => 'showPassword ? "text" : "password"',
                                ]),

                            TextInput::make('confirm_password')
                                ->label(__('app.input.confirm_password'))
                                ->placeholder(__('app.input.confirm_password'))
                                ->password() // Masks the input by default
                                ->required()
                                ->minLength(8)
                                ->maxLength(32)
                                ->suffixIcon('heroicon-s-eye') // Default icon (eye)
                                ->suffixIconColor('primary')
                                ->extraAttributes([
                                    'x-data' => '{ showPassword: false }',
                                    'x-on:click' => 'showPassword = !showPassword',
                                    ':type' => 'showPassword ? "text" : "password"',
                                ]),

                        TextInput::make('mobile')
                            ->label(__('app.input.mobile'))
                            ->placeholder(__('app.input.mobile'))
                            ->required()
                            ->maxLength(11)
                            ->minLength(8),

                        Select::make('hearing_loss')
                            ->label(__('app.input.hearing_loss'))
                            ->placeholder(__('app.input.hearing_loss'))
                            ->required()
                            ->options([
                                'partial' => __('app.input.partial'),
                                'complete' => __('app.input.complete'),
                            ]),

                            TextInput::make('age')
                            ->label(__('app.input.age'))
                            ->placeholder(__('app.input.age'))
                            ->numeric()
                            ->required(),
                    ]),

                Actions::make([
                    Action::make('submit')
                        ->label(__('front.input.register'))
                        ->submit('create')
                        ->color('blue')
                        ->extraAttributes([
                            'class' => 'bg-primary-800 hover:bg-primary-700 text-white py-2 px-20 text-xs rounded-full transition duration-200',
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
