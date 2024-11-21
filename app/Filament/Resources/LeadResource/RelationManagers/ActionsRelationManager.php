<?php

namespace App\Filament\Resources\LeadResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Enums\LeadStatus;
use Filament\Tables\Table;
use App\Enums\LeadActionStatus;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\RelationManagers\Concerns\Translatable;

class ActionsRelationManager extends RelationManager
{
    // use Translatable;
    protected static string $relationship = 'actions';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('from_status')
                    ->options(
                        LeadStatus::toSelectArray()
                    ),
                Select::make('to_status')
                    ->options(
                        LeadStatus::toSelectArray()
                    ),
                TextInput::make('action')
                    ->required()
                    ->maxLength(255),
                TextInput::make('type')
                    ->required()
                    ->maxLength(255),
                Textarea::make('comment'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->heading(__('lead.actions.title'))
            ->modifyQueryUsing(fn(Builder $query) => $query->latest())
            ->columns([
                ImageColumn::make('agent.avatar')
                    ->label(__('app.input.avatar'))
                    ->circular()
                    ->size(36)
                    ->grow(false)
                    ->defaultImageUrl(url('/app/avatars/0.svg')),

                TextColumn::make('agent')
                    ->label(__('lead.agent'))
                    ->state(fn($record) => $record->agent?->name ?? '--'),

                TextColumn::make('service.name')
                    ->label(__('lead.input.service'))
                    ->state(fn($record) => $record->service->name ?? '--'),

                TextColumn::make('to_status')
                    ->label(__('lead.status.title'))
                    ->badge(fn($record) => $record->to_status->getLabel()),

                TextColumn::make('comment')
                    ->label(__('lead.actions.comment_title'))
                    ->state(fn($record) => $record->comment ?? '--'),

                TextColumn::make('created_at')
                    ->label(__('lead.actions.created_at'))
                    ->since(),
            ])
            ->headerActions([
                Action::make('follow')
                    ->label(__('lead.actions.follow'))
                    ->form([
                        TextInput::make('comment')
                            ->autofocus()
                            ->required()
                            ->maxLength(150)
                            ->label(__('lead.actions.follow_comment'))
                            ->placeholder(__('lead.actions.follow_hint')),
                    ])
                    ->modalWidth('sm')
                    ->color('warning')
                    ->action(function (array $data) {
                        $this->ownerRecord->actions()->create([
                            'lead_id' => $this->ownerRecord->id,
                            'from_status' => $this->ownerRecord->status,
                            'to_status' => $status = LeadStatus::Follow,
                            'comment' => $data['comment'],
                            'agent_id' => auth()->id(),
                        ]);

                        $this->ownerRecord->update([
                            'status' => $status,
                        ]);
                    }),

                Action::make('done')
                    ->disabled(fn() => $this->ownerRecord->status === LeadStatus::Done)
                    ->label(__('lead.actions.done'))
                    ->form([
                        TextInput::make('comment')
                            ->autofocus()
                            ->maxLength(150)
                            ->label(__('lead.actions.done_comment'))
                            ->placeholder(__('lead.actions.done_hint')),
                    ])
                    ->modalWidth('sm')
                    ->color('success')
                    ->action(function (array $data) {
                        $this->ownerRecord->actions()->create([
                            'lead_id' => $this->ownerRecord->id,
                            'from_status' => $this->ownerRecord->status,
                            'to_status' => $status = LeadStatus::Done,
                            'comment' => $data['comment'],
                            'agent_id' => auth()->id(),
                        ]);

                        $this->ownerRecord->update([
                            'status' => $status,
                        ]);
                    }),


                Action::make('close')
                    ->disabled(fn() => $this->ownerRecord->status === LeadStatus::Closed)
                    ->label(__('lead.actions.close'))
                    ->form([
                        TextInput::make('comment')
                            ->autofocus()
                            ->required()
                            ->minLength(3)
                            ->maxLength(150)
                            ->label(__('lead.actions.closed_comment'))
                            ->placeholder(__('lead.actions.closed_hint')),
                    ])
                    ->modalWidth('sm')
                    ->color('danger')
                    ->action(function (array $data) {
                        $this->ownerRecord->actions()->create([
                            'lead_id' => $this->ownerRecord->id,
                            'from_status' => $this->ownerRecord->status,
                            'to_status' => $status = LeadStatus::Closed,
                            'comment' => $data['comment'],
                            'agent_id' => auth()->id(),
                        ]);

                        $this->ownerRecord->update([
                            'status' => $status,
                        ]);
                    }),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
