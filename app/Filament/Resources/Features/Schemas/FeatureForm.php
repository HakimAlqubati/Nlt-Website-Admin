<?php

namespace App\Filament\Resources\Features\Schemas;

use App\Models\Feature;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FeatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(function () {
                        return Feature::max('sort_order') + 1;
                    }),
                TextInput::make('section_number')
                    ->default(null),
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('image_path')
                    ->image()
                    ->disk('public')
                    ->directory('images/features')
                    ->visibility('public'),

                TextInput::make('image_alt') // alt text كـ نص
                    ->maxLength(255)
                    ->default(null),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
