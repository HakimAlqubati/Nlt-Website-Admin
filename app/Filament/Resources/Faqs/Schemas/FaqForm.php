<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(1),
                TextInput::make('section_number')
                    ->default(null),
                TextInput::make('question')
                    ->required(),
                Textarea::make('answer')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
