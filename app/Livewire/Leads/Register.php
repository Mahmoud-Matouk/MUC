<?php

namespace App\Livewire\Leads;

use App\Models\Lead;
use Livewire\Component;
use Filament\Forms\Form;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Illuminate\Contracts\View\View;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;

class Register extends Component implements HasForms
{
    use InteractsWithForms;
    public ?string $name;
    public ?string $email;
    public ?string $mobile;
    public ?string $message;

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns([
                        'xs' => 1,
                        'sm' => 2,
                        'xl' => 2,
                    ])
                    ->schema([
                        TextInput::make('name')
                            ->label(__('lead.name'))
                            ->placeholder(__('lead.name'))
                            ->required()
                            ->maxLength(50),

                        Section::make(__('lead.contact.title'))
                            ->columns([
                                'sm' => 1,
                                'lg' => 2,
                            ])
                            ->description(__('lead.contact.description'))
                            ->schema([
                                TextInput::make('mobile')
                                    ->label(__('app.input.mobile'))
                                    ->placeholder(__('app.input.mobile'))
                                    ->required()
                                    ->maxLength(11)
                                    ->minLength(8),

                                TextInput::make('email')
                                    ->label(__('app.input.email'))
                                    ->placeholder('you@site.com')
                                    ->email()
                                    ->required(),
                            ]),

                        Textarea::make('message')
                            ->columnSpan(2)
                            ->label(__('lead.message'))
                            ->placeholder(__('lead.message'))
                            ->required()
                            ->maxLength(555),

                        Actions::make([
                            Action::make('submit')
                                ->label(__('app.submit'))
                                ->submit('create')
                                ->color('gray'),
                        ]),
                    ]),
            ]);
    }

    public function create(): void
    {
        Lead::create([
            'name' => $this->name,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'address' => $this->address,
            'website' => $this->website,
            'sector' => $this->sector,
            'legal_services' => $this->legal_services,
        ]);

        // $this->form->fill();

        session()->flash('success', 'You registered successfully.');
    }

    public function render(): View
    {
        return view('livewire.leads.register');
    }
}
