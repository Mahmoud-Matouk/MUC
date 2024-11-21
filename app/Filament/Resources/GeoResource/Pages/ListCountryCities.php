<?php

namespace App\Filament\Resources\GeoResource\Pages;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Actions\LocaleSwitcher;
use App\Filament\Resources\GeoResource;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Resources\Pages\ManageRecords\Concerns\Translatable;

class ListCountryCities extends ManageRelatedRecords
{
    use Translatable;

    protected static string $resource = GeoResource::class;

    protected static string $relationship = 'cities';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationLabel(): string
    {
        return __('geo.cities');
    }

    public function getTitle(): string|Htmlable
    {
        return __('geo.cities');
    }

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('app.input.name'))
                    ->placeholder(__('app.input.name'))
                    ->autofocus()
                    ->required()
                    ->maxLength(30),

                Forms\Components\TextInput::make('code')
                    ->label(__('app.input.code'))
                    ->placeholder(__('app.input.code'))
                    ->unique(
                        table: 'cities',
                        column: 'code',
                        ignoreRecord: true
                    )
                    ->required()
                    ->maxLength(30),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),

                Tables\Columns\TextColumn::make('code'),

                Tables\Columns\TextColumn::make('country.name')
                    ->label(__('geo.country')),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->modalWidth('md')
                    ->label(__('geo.create_city')),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->icon('iconoir-page-edit')
                    ->modalWidth('md'),
            ]);
    }
}
