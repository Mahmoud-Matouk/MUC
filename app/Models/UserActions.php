<?php

namespace App\Models;

use Random\RandomException;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use pxlrbt\FilamentExcel\Columns\Column;
use Filament\Forms\Components\FileUpload;
use Marvinosswald\FilamentInputSelectAffix\TextInputSelectAffix;

trait UserActions
{
    public function getLocaleLabel(): string
    {
        return $this->locale === 'ar' ? 'العربية' : 'English';
    }

    public function getOrderedLocales(): array
    {
        return $this->locale === 'ar' ? ['ar', 'en'] : ['en', 'ar'];
    }

    public function getLocaleFlag(): string
    {
        return $this->locale === 'ar' ? '🇸🇦' : '🇺🇸';
    }

    public function removeUserRole(RoleModel $role): void
    {
        $this->removeRole($role);

        // TODO: Dispatch event to notify user & reload auth session.
    }

    public function setAsActive(bool $isActive = true): void
    {
        $this->update(['active' => $isActive]);
    }

    public function setAsAdmin(bool $isAdmin = true): void
    {
        $this->update(['is_admin' => $isAdmin]);
    }

    public function setAsAgent(bool $isAgent = true): void
    {
        $this->update(['is_agent' => $isAgent]);
    }

    public static function createUser(array $data): self
    {
        return self::create($data);
    }

    public static function getEditUserForm(): array
    {
        return [
            Grid::make()
                ->columns()
                ->schema([
                    TextInput::make('name')
                        ->label(__('app.input.name'))
                        ->placeholder(__('app.input.name'))
                        ->autofocus()
                        ->required()
                        ->maxLength(50),

                    TextInput::make('email')
                        ->label(__('app.input.email'))
                        ->placeholder(__('app.input.email'))
                        ->email()
                        ->unique(ignoreRecord: true)
                        ->required(),

                    TextInput::make('username')
                        ->label(__('app.input.username'))
                        ->placeholder(__('app.input.username'))
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->maxLength(20),

                    TextInputSelectAffix::make('mobile')
                        ->label(__('app.input.mobile'))
                        ->placeholder(__('app.input.mobile'))
                        ->required()
                        ->maxLength(11)
                        ->minLength(8)
                        ->position('prefix')
                        ->formatStateUsing(fn (User $user) => $user->locale_mobile)
                        ->rules([
                            fn ($get) => function (string $attribute, $value, $fail) use ($get) {
                                if (User::whereNot('id', $get('id'))->where('mobile', full_mobile($value, $get('mobile_code')))->exists()) {
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
                ]),

            FileUpload::make('avatar')
                ->hiddenLabel()
                ->alignCenter()
                ->avatar()
                ->imageEditor()
                ->maxSize(1024 * 1024 * 10)
                ->directory('avatars'),
        ];
    }

    public static function mutateEditUserFormData(array $data): array
    {
        $data['mobile'] = full_mobile($data['mobile'], $data['mobile_code']);
        $data['locale_mobile'] = locale_mobile($data['mobile'], $data['mobile_code']);

        return $data;
    }

    /**
     * @throws RandomException
     */
    public static function mutateFormDataBeforeCreate(array $data): array
    {
        $data['mobile_code'] = $data['mobile_code'] ? $data['mobile_code'] : '966';

        $data['mobile'] = full_mobile(
            mobile: $data['mobile'],
            mobile_code: $data['mobile_code']
        );

        $data['locale_mobile'] = locale_mobile(
            mobile: $data['mobile'],
            mobile_code: $data['mobile_code']
        );

        $data['name'] = str($data['name'])->title()->toString();

        if (isset($data['email']) && $data['email'] !== '') {
            $data['email'] = str($data['email'])->lower()->toString();
        } else {
            $data['email'] = null;
        }

        $data['username'] = self::setUsername(
            name: $data['name'],
            email: $data['email'] ?? null
        );

        $data['locale'] = self::setLocale(
            locale: $data['locale'] ?? null
        );

        $data['avatar'] = self::setAvatar($data['gender'] ?? null);

        $data['password'] = self::setPassword($data['password'] ?? null);

        return $data;
    }

    /**
     * @throws RandomException
     */
    public static function setUsername(string $name, ?string $email = null): string
    {
        $username = strtolower(
            preg_replace('/\W/', '', $name)
        );

        if ($email) {
            $username = strtolower(
                explode('@', $email)[0]
            );
        }

        if (self::uniqueUsername($username)) {
            return $username;
        }

        for ($i = 1; $i <= 100; $i++) {
            $try = $username.random_int(10, 1111);

            if (self::uniqueUsername($try)) {
                $username = $try;
                break;
            }
        }

        return $username;
    }

    public static function uniqueUsername(string $username): bool
    {
        $user = User::where('username', $username)->first(['id']);

        return ! isset($user);
    }

    public static function setLocale(?string $locale = null): string
    {
        $locale = $locale ?? config(key: 'app.fallback_locale');

        if ($locale) {
            $exits = strtolower($locale);

            if (in_array(needle: $exits, haystack: config(key: 'app.locales'), strict: true)) {
                $locale = $exits;
            }
        }

        return $locale;
    }

    /**
     * @throws RandomException
     */
    public static function setAvatar($gender = null): string
    {
        // $avatar = $gender ? $gender.'-'.random_int(1, 17).'.svg' : '0.png';
        $avatar = '0.png';

        Storage::put(
            path: $path = "avatars/$avatar",
            contents: file_get_contents(filename: public_path(path: "app/avatars/$avatar"))
        );

        return $path;
    }

    public static function setPassword(?string $password = null): ?string
    {
        return $password ? bcrypt(value: $password) : null;
    }

    public static function getChangeUserPasswordForm(): array
    {
        return [
            TextInput::make('password')
                ->label(__('app.input.password'))
                ->placeholder(__('app.input.password'))
                ->password()
                ->confirmed()
                ->autofocus()
                ->required(),

            TextInput::make('password_confirmation')
                ->label(__('app.input.password_confirmation'))
                ->placeholder(__('app.input.password_confirmation'))
                ->password()
                ->required(),
        ];
    }

    public function changeUserPassword(array $data): void
    {
        $this->update(['password' => bcrypt($data['password'])]);
    }

    public static function getExportColumns(): array
    {
        return [
            Column::make('active')
                ->heading(__('app.input.active'))
                ->formatStateUsing(function ($state) {
                    return $state ? __('app.input.active') : __('app.input.inactive');
                }),

            Column::make('name')
                ->heading(__('app.input.name')),

            Column::make('email')
                ->heading(__('app.input.email')),

            Column::make('locale_mobile')
                ->heading(__('app.input.mobile')),
        ];
    }
}
