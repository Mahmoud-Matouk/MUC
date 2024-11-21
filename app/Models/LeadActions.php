<?php

namespace App\Models;

use Filament\Forms\Set;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\BranchResource;
use Filament\Forms\Components\Actions\Action;

trait LeadActions
{
    public static function getForm(bool $edit = false): array
    {
        return [
            Grid::make()
                ->columns()
                ->schema([
                    TextInput::make('name')
                        ->label(__('branch.branch_name'))
                        ->placeholder(__('branch.branch_name'))
                        ->autofocus()
                        ->required()
                        ->maxLength(50)
                        ->unique(BranchResource::getModel(), 'name', ignoreRecord: $edit),

                    TextInput::make('mobile')
                        ->label(__('app.input.mobile'))
                        ->placeholder(__('app.input.mobile'))
                        ->nullable()
                        ->maxLength(10)
                        ->minLength(10),

                    TextInput::make('address')
                        ->label(__('app.input.address'))
                        ->placeholder(__('app.input.address'))
                        ->required()
                        ->maxLength(50)
                        ->columnSpan($edit ? 2 : 1),

                    Select::make('city_id')
                        ->native(false)
                        ->label(__('app.input.city'))
                        ->placeholder(__('app.input.city'))
                        ->options(City::pluck('name', 'id')->toArray())
                        ->required()
                        ->hidden($edit),

                    TextInput::make('map_url')
                        ->label(__('app.input.map_url'))
                        ->placeholder(__('app.input.map_url'))
                        ->nullable()
                        ->maxLength(255)
                        ->columnSpan(2),

                    FileUpload::make('image')
                        ->label(__('app.input.image'))
                        ->placeholder(__('app.input.image'))
                        ->image()
                        ->nullable()
                        ->imageEditor()
                        ->directory('branches')
                        ->imageCropAspectRatio('3:2')
                        ->columnSpan(2),
                ]),

            Actions::make([
                Action::make('fill')
                    ->icon('iconsax-bro-magicpen')
                    ->outlined()
                    ->hidden(app()->environment('production'))
                    ->action(function (Set $set) {
                        $record = Branch::factory()->make();

                        $set('name', $record->name);
                        $set('address', $record->address);
                        $set('mobile', $record->mobile);
                        $set('city_id', $record->city_id);
                        $set('map_url', $record->map_url);
                    }),
            ]),
        ];
    }
}
