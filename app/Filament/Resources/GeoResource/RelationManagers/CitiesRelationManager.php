<?php

namespace App\Filament\Resources\GeoResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\RelationManagers\Concerns\Translatable;

class CitiesRelationManager extends RelationManager
{
    use Translatable;

    protected static string $relationship = 'cities';

    public static function getTranslatableLocales(): array
    {
        return auth()->user()?->getOrderedLocales() ?? [];
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
            ->striped()
            ->columns([
                Tables\Columns\TextColumn::make('name'),

                Tables\Columns\TextColumn::make('code'),

                Tables\Columns\TextColumn::make('country.name')
                    ->label(__('geo.country')),
            ])
            ->headerActions([
                Tables\Actions\LocaleSwitcher::make(),

                Tables\Actions\CreateAction::make()
                    ->authorize(true)
                    ->modalWidth('md')
                    ->label(__('geo.create_city')),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->authorize(true)
                    ->modalWidth('md')
                    ->iconButton()
                    ->tooltip(__('app.edit'))
                    ->icon('iconoir-page-edit'),
            ]);
    }
}
