<?php

namespace App\Filament\Resources\PostResource\Pages;

use Filament\Infolists\Infolist;
use App\Filament\Resources\PostResource;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\Section;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Actions\Action;

class ViewPost extends ViewRecord
{
    protected static string $resource = PostResource::class;

    public function getTitle(): Htmlable|string
    {
        return $this->record->title;
    }

    protected function getHeaderActions(): array
    {
        return [
            //            EditAction::make('edit')
            //                ->outlined()
            //                ->modalWidth('lg')
            //                ->icon('iconoir-page-edit')
            //                ->form(User::getEditUserForm())
            //                ->mutateFormDataUsing(
            //                    fn ($data) => User::mutateEditUserFormData($data)
            //                ),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make()
                    ->key('postSummary')
                    ->headerActions([
                        Action::make('edit')
                            ->icon('iconoir-page-edit')
                            ->label('Edit')
                            ->form([
                                TextInput::make('title')
                                    ->autofocus()
                                    ->required()
                                    ->label('Title')
                                    ->placeholder('Enter title')
                                    ->hint('Enter the title of the post'),
                            ]),
                    ])
                    ->schema([
                        TextEntry::make('summary')
                            ->hiddenLabel()
                    ]),

                Section::make()
                    ->extraAttributes([
                        'class' => 'h-full',
                    ])
                    ->schema([
                        TextEntry::make('content')->html(),
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
