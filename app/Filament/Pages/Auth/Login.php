<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Form;
use Filament\Actions\Action;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\Login as BaseLogin;
use Illuminate\Validation\ValidationException;

class Login extends BaseLogin
{
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                $this->getLoginFormComponent(),
                $this->getPasswordFormComponent(),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            $this->getAuthenticateFormActionWithMutation(),
            $this->getFillAction(),
        ];
    }

    protected function getLoginFormComponent(): Component
    {
        return TextInput::make('login')
            ->label(__('app.input.login_field'))
            ->placeholder(__('app.input.login_field'))
            ->required()
            ->autofocus()
            ->autocomplete()
            ->minLength(3)
            ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getFillAction()
    {
        return Action::make('fill')
            ->icon('iconoir-magic-wand')
            ->outlined()
            ->action(function ($livewire) {
                $livewire->form->fill([
                    'login' => 'osama',
                    'password' => '6532100Cs',
                ]);
            })->hidden(app()->environment('production'));
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        $login = $data['login'] ? strtolower($data['login']) : null;

        $login_type = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if ($login_type === 'username') {
            // TODO: add mobile code to login field.
            $mobile = full_mobile($login);

            if ($mobile && str($mobile)->length() > 11) {
                $login_type = 'mobile';
                $login = $mobile;
            }
        }

        return [
            $login_type => $login,
            'password' => $data['password'],
        ];
    }

    protected function getAuthenticateFormActionWithMutation(): Action
    {
        return Action::make('authenticate')
            ->label(__('filament-panels::pages/auth/login.form.actions.authenticate.label'))
            ->submit('authenticate')
            ->mutateFormDataUsing(function (array $data) {
                $data['remember'] = true;

                return $data;
            });
    }

    protected function throwFailureValidationException(): never
    {
        throw ValidationException::withMessages([
            'data.login' => __('filament-panels::pages/auth/login.messages.failed'),
        ]);
    }
}
