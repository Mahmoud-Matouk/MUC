<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Enums\Role;
use App\Models\User;
use App\Models\RoleModel;
use Filament\Actions\EditAction;
use Filament\Infolists\Infolist;
use Filament\Forms\Components\Select;
use Filament\Infolists\Components\Grid;
use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\Section;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Actions\Action;
use Filament\Infolists\Components\RepeatableEntry;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    public function getTitle(): Htmlable|string
    {
        return $this->record->name;
    }

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make('edit')
                ->outlined()
                ->modalWidth('lg')
                ->icon('iconoir-page-edit')
                ->form(User::getEditUserForm())
                ->mutateFormDataUsing(
                    fn ($data) => User::mutateEditUserFormData($data)
                ),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make()
                    ->columns([
                        'default' => 2,
                        'md' => 4,
                    ])
                    ->schema([
                        ImageEntry::make('avatar')
                            ->hiddenLabel()
                            ->circular()
                            ->size(66),

                        TextEntry::make('name')
                            ->hiddenLabel()
                            ->color('primary')
                            ->icon('iconsax-bro-user')
                            ->size(TextEntry\TextEntrySize::Large)
                            ->helperText(fn ($record) => $record->email)
                            ->extraAttributes([
                                'class' => 'font-bold',
                            ]),

                        TextEntry::make('locale_mobile')
                            ->hiddenLabel()
                            ->color('primary')
                            ->icon('iconsax-bro-mobile')
                            ->size(TextEntry\TextEntrySize::Large)
                            ->helperText(fn (User $record) => $record->mobile)
                            ->extraAttributes([
                                'class' => 'font-bold',
                            ]),

                        TextEntry::make('locale')
                            ->hiddenLabel()
                            ->color('primary')
                            ->icon('iconsax-bro-global')
                            ->getStateUsing(
                                fn (User $record) => $record->locale
                            )
                            ->helperText(
                                fn (User $record) => $record->getLocaleLabel()
                            )
                            ->size(TextEntry\TextEntrySize::Large)
                            ->extraAttributes([
                                'class' => 'font-bold',
                            ]),
                    ]),

                Grid::make()->schema([
                    Section::make()
                        ->columnSpan(1)
                        ->extraAttributes([
                            'class' => 'h-full',
                        ])
                        ->schema([
                            RepeatableEntry::make('roles')
                                ->label(__('user.user_roles'))
                                ->grid()
                                ->hintAction(
                                    Action::make('addRole')
                                        ->icon('iconsax-bro-add-circle')
                                        ->label(__('user.add_role'))
                                        ->modalWidth('md')
                                        ->modalSubmitActionLabel(__('app.save'))
                                        ->form(
                                            fn (User $record) => [
                                                Select::make('roles')
                                                    ->multiple()
                                                    ->native(false)
                                                    ->label(__('user.add_role'))
                                                    ->options(RoleModel::all()->mapWithKeys(fn (RoleModel $role) => [$role->id => Role::from($role->name)->label()]))
                                                    ->disableOptionWhen(fn ($value) => $record->hasRole($value)),
                                            ])
                                        ->action(fn (User $record, array $data) => $record->assignRole($data['roles']))
                                )
                                ->schema([
                                    TextEntry::make('name')
                                        ->hiddenLabel()
                                        ->color('primary')
                                        ->formatStateUsing(fn ($state) => Role::from($state)->label())
                                        ->helperText(fn ($state) => Role::from($state)->description())
                                        ->suffixAction(
                                            Action::make('toggleRole')
                                                ->color('danger')
                                                ->iconButton()
                                                ->icon('iconsax-bro-close-circle')
                                                ->requiresConfirmation()
                                                ->action(fn (RoleModel $record, User $user) => $user->removeUserRole($record))
                                        )
                                        ->size(TextEntry\TextEntrySize::Large)
                                        ->extraAttributes([
                                            'class' => 'font-bold',
                                        ]),
                                ]),
                        ]),
                ]),
            ]);
    }

    public function getRelationManagers(): array
    {
        return [
            //
        ];
    }
}
