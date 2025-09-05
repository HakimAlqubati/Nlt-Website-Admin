<?php

namespace App\Filament\Resources\ChooseItems\Schemas;

use App\Models\ChooseItem;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ChooseItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(function () {
                        return ChooseItem::max('sort_order') + 1;
                    }),
                Select::make('row')
                    ->options(['top' => 'Top', 'bottom' => 'Bottom'])
                    ->default('top')
                    ->required(),
                TextInput::make('section_number')
                    ->default(null),
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('icon_path')
                    ->default(null),
                TextInput::make('icon_alt')
                    ->default(null),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
