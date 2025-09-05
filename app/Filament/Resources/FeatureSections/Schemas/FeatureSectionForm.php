<?php

namespace App\Filament\Resources\FeatureSections\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FeatureSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // TextInput::make('section_number')
                //     ->required()
                //     ->default('01'),
                TextInput::make('title')
                    ->default(null),
                TextInput::make('subtitle')
                    ->default(null),
            ]);
    }
}
