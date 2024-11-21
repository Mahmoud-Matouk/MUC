<?php

namespace App\Filament\Resources\BundleResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use App\Models\Analysis;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Actions\LocaleSwitcher;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\RelationManagers\Concerns\Translatable;

class AnalysesRelationManager extends RelationManager
{
    use Translatable;
    protected static string $relationship = 'analyses';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns(3)
                    ->schema([
                        TextInput::make('name')
                            ->label(__('app.input.name'))
                            ->placeholder(__('app.input.name'))
                            ->autofocus()
                            ->required()
                            ->maxLength(50),

                        TextInput::make('original_price')
                            ->label(__('app.input.original_price'))
                            ->placeholder(__('app.input.original_price'))
                            ->numeric()
                            ->required(),

                        TextInput::make('discount_percentage')
                            ->label(__('app.input.discount_percentage'))
                            ->placeholder(__('app.input.discount_percentage'))
                            ->suffix('%')
                            ->numeric()
                            ->required(),

                        RichEditor::make('description')
                            ->label(__('app.input.description'))
                            ->placeholder(__('app.input.description'))
                            ->required()
                            ->columnSpanFull()
                            ->maxLength(150),
                    ]),

                Section::make()
                    ->columns()
                    ->schema([
                        FileUpload::make('image')
                            ->label(__('app.input.image'))
                            ->image()
                            ->columnSpanFull()
                            ->required(),
                    ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('app.input.image'))
                    ->defaultImageUrl(url(config('app.fallback.image'))),

                Tables\Columns\TextColumn::make('name')
                    ->label(__('app.input.name'))
                    ->searchable(),

                Tables\Columns\TextColumn::make('description')
                    ->label(__('app.input.description'))
                    ->limit(50)
                    ->html()
                    ->searchable(),

                Tables\Columns\TextColumn::make('original_price')
                    ->label(__('app.input.original_price'))
                    ->description(fn(Analysis $analysis) => 'After Discount ' . intval($analysis->original_price - $analysis->original_price * ($analysis->discount_percentage / 100)))
                    ->sortable(),

                Tables\Columns\TextColumn::make('discount_percentage')
                    ->label(__('app.input.discount_percentage'))
                    ->badge()
                    ->suffix(' %')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->actions([
                EditAction::make()
                ->iconButton(),
                DeleteAction::make()
                ->iconButton(),
            ])
            ->bulkActions([]);
    }
}
