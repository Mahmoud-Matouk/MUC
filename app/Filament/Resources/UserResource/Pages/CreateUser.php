<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Models\User;
use App\Enums\Gender;
use App\Models\Country;
use Filament\Forms\Form;
use Random\RandomException;
use Filament\Actions\Action;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use App\Filament\Resources\UserResource;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Columns\Summarizers\Count;
use Marvinosswald\FilamentInputSelectAffix\TextInputSelectAffix;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('fill')
                ->icon('iconoir-magic-wand')
                ->outlined()
                ->hidden(app()->environment('production'))
                ->action(function ($livewire) {
                    $livewire->form->fill([
                        'gender' => 1,
                        'name' => fake()->name,
                        'mobile_code' => '968',
                        'mobile' => '09'.fake()->numberBetween(1000000, 9999999),
                        'email' => fake()->unique()->safeEmail(),
                        'password' => '112233',
                    ]);
                }),

            ...parent::getFormActions(),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns([
                        'xs' => 1,
                        'sm' => 2,
                        'xl' => 4,
                    ])
                    ->schema([
                        TextInput::make('name')
                            ->label(__('app.input.name'))
                            ->placeholder(__('app.input.name'))
                            ->autofocus()
                            ->required()
                            ->maxLength(50),

                            TextInputSelectAffix::make('mobile')
                                ->label(__('app.input.mobile'))
                                ->placeholder(__('app.input.mobile'))
                                ->required()
                                ->maxLength(11)
                                ->minLength(8)
                                ->position('prefix')
                                ->rules([
                                    fn ($get) => function (string $attribute, $value, $fail) use ($get) {
                                        $mobile = full_mobile($value, $get('mobile_code'));

                                        if(!$mobile) {
                                            $fail('Invalid mobile');
                                        }

                                        if (User::whereNot('id', $get('id'))->where('mobile', $mobile)->exists()) {
                                            $fail('Already taken');
                                        }
                                    },
                                ])
                                ->select(fn() => Select::make('mobile_code')
                                    ->placeholder('Code')
                                    ->position('suffix')
                                    ->required()
                                    ->extraAttributes([
                                        'class' => 'w-[78px]',
                                    ])
                                    ->options(Country::getMobileCodeCountries())),

                        // TextInput::make('mobile')
                        //     ->label(__('app.input.mobile'))
                        //     ->placeholder('05xxxxxxxx')
                        //     ->prefix('+966')
                        //     ->required()
                        //     ->maxLength(10)
                        //     ->extraAttributes([
                        //         'dir' => 'ltr',
                        //     ])
                        //     ->unique()
                        //     ->rules([
                        //         fn ($get) => function (string $attribute, $value, $fail) use ($get) {
                        //             if (User::where('mobile', full_mobile($value, $get('mobile_code')))->exists()) {
                        //                 $fail(__('codes.already_registered'));
                        //             }
                        //         },
                        //     ]),

                        TextInput::make('email')
                            ->label(__('app.input.email'))
                            ->placeholder('you@site.com')
                            ->email()
                            ->unique()
                            ->required(),

                        TextInput::make('password')
                            ->label(__('app.input.password'))
                            ->placeholder(__('app.input.password'))
                            ->password()
                            ->required(),

                        Radio::make('gender')
                            ->label(__('auth.gender.title'))
                            ->enum(Gender::class)
                            ->options(Gender::class)
                            ->inline()
                            ->required()
                            ->inlineLabel(false),
                    ]),
            ]);
    }

    /**
     * @throws RandomException
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return User::mutateFormDataBeforeCreate($data);
    }
}
