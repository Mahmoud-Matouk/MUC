<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use App\Enums\Gender;
use Filament\Forms\Form;
use Filament\Facades\Filament;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\EditProfile as BaseEditProfile;

class CustomProfile extends BaseEditProfile
{
    public ?string $localeRedirectUrl = null;

    public function form(Form $form): Form
    {
        return $form
            ->columns()
            ->schema([
                $this->getNameFormComponent(),
                $this->getUsernameFormComponent(),
                $this->getEmailFormComponent(),
                $this->getMobileFormComponent(),
                $this->getGenderFormComponent(),
                $this->getLocaleFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
            ]);
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // TODO: Add mobile code to the form.
        $data['mobile'] = full_mobile($data['locale_mobile']);

        if (isset($data['locale']) && $data['locale'] !== auth()->user()->locale) {
            $this->localeRedirectUrl = Filament::getCurrentPanel()->getUrl() ?? null;
        }

        return $data;
    }

    public function afterSave(): void
    {
        if ($this->localeRedirectUrl) {
            $this->redirect($this->localeRedirectUrl);
        }
    }

    protected function getMobileFormComponent(): TextInput
    {
        return TextInput::make('locale_mobile')
            ->label(__('app.input.mobile'))
            ->prefix('+966')
            ->required()
            ->maxLength(10)
            ->extraAttributes([
                'dir' => 'ltr',
            ])->rules([
                fn ($get) => function (string $attribute, $value, $fail) use ($get) {
                    if (User::whereNot('id', $get('id'))->where('mobile', full_mobile($value))->exists()) {
                        $fail('Already taken');
                    }
                },
            ]);
    }

    protected function getUsernameFormComponent(): TextInput
    {
        return TextInput::make('username')
            ->unique(
                'users',
                'username',
                ignoreRecord: true
            )
            ->required()
            ->maxLength(20);
    }

    protected function getGenderFormComponent(): Select
    {
        return Select::make('gender')
            ->options(Gender::class);
    }

    protected function getLocaleFormComponent(): Select
    {
        return Select::make('locale')
            ->options([
                'ar' => 'العربية',
                'en' => 'English',
            ]);
    }
}
