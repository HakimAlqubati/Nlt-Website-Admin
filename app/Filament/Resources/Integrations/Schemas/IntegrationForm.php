<?php

namespace App\Filament\Resources\Integrations\Schemas;

use App\Models\Integration;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class IntegrationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->default(null),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(function () {
                        return Integration::max('sort_order') + 1;
                    }),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('circle_position')
                    ->required(),

                FileUpload::make('image_path_1')
                    ->image()
                    ->disk('public')
                    ->directory('integrations')
                    ->required(),


                FileUpload::make('image_path_2')
                    ->image()
                    ->disk('public')
                    ->directory('integrations')
                    ->required(),





            ]);
    }
}
