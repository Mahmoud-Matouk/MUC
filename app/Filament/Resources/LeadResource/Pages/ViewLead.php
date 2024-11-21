<?php

namespace App\Filament\Resources\LeadResource\Pages;

use App\Models\Lead;
use App\Enums\LeadStatus;
use Filament\Actions\EditAction;
use Filament\Infolists\Infolist;
use Filament\Actions\LocaleSwitcher;
use Filament\Infolists\Components\Grid;
use App\Filament\Resources\LeadResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\Section;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Resources\Pages\ViewRecord\Concerns\Translatable;
use App\Filament\Resources\LeadResource\RelationManagers\ActionsRelationManager;

class ViewLead extends ViewRecord
{
    // use Translatable;
    protected static string $resource = LeadResource::class;

    public function getTitle(): Htmlable|string
    {
        return $this->record->name;
    }

    public function mount(int|string $record): void
    {
        parent::mount($record);

        if(auth()->user()?->isAgent()) {
            if(! $this->record->agent_id) {
                $this->record->update([
                    'agent_id' => auth()->id(),
                    'status' => LeadStatus::Follow,
                    'followed_at' => now(),
                    // 'deadline_at' => now()->addDays(7)
                ]);

                $this->record->actions()->create([
                    'from_status' => LeadStatus::New,
                    'to_status' => LeadStatus::Follow,
                    'agent_id' => auth()->id(),
                    'comment' => 'تم الإستحواذ على العميل',
                ]);
            }
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make('edit')
                ->outlined()
                ->modalWidth('lg')
                ->icon('iconoir-page-edit')
                ->mutateFormDataUsing(
                    fn ($data) => Lead::mutateEditLeadFormData($data)
                ),
                // LocaleSwitcher::make(),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make()
                    ->columns([
                        'default' => 2,
                        'md' => 3,
                    ])
                    ->schema([
                        TextEntry::make('name')
                            ->hiddenLabel()
                            ->color('primary')
                            ->icon('iconsax-bro-user')
                            ->size(TextEntry\TextEntrySize::Large)
                            ->helperText(fn (Lead $record) => $record->email)
                            ->extraAttributes([
                                'class' => 'font-bold',
                            ]),

                        TextEntry::make('mobile')
                            ->hiddenLabel()
                            ->copyable()
                            ->color('primary')
                            ->icon('iconsax-bro-mobile')
                            ->size(TextEntry\TextEntrySize::Large)
                            ->helperText(fn (Lead $record) => $record->created_at->diffForHumans())
                            ->extraAttributes([
                                'class' => 'font-bold',
                            ]),
                    ]),

                Grid::make()->schema([
                    Section::make()
                        ->columns(3)
                        ->extraAttributes([
                            'class' => 'h-full',
                        ])
                        ->schema([
                            ImageEntry::make('agent.avatar')
                                ->hiddenLabel()
                                ->circular()
                                ->size(66)
                                ->defaultImageUrl(fn (Lead $record) => $record->agent?->name ? url('/app/avatars/0.svg') : url('/app/fallback/anonymous.png')),

                            TextEntry::make('agent.name')
                                ->hiddenLabel()
                                ->color('primary')
                                ->icon('iconsax-bro-user')
                                ->size(TextEntry\TextEntrySize::Large)
                                ->state(fn (Lead $record) => $record->agent?->name ?? '--')
                                ->helperText(fn (Lead $record) => $record->agent?->email)
                                ->extraAttributes([
                                    'class' => 'font-bold',
                                ]),
                        ]),
                ]),
            ]);
    }

    public function getRelationManagers(): array
    {
        return [
            ActionsRelationManager::class
        ];
    }
}
