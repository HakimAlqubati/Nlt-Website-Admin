<?php

namespace App\Filament\Resources\TopSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TopSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title_desktop')
                    ->required(),
                TextInput::make('title_mobile')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('btn_primary_label')
                    ->required(),
                TextInput::make('btn_primary_link')
                    ->required(),
                TextInput::make('btn_secondary_label')
                    ->required(),
                TextInput::make('btn_secondary_link')
                    ->required(),
                FileUpload::make('image_1')
                    ->image()
                    ->disk('public')
                    ->directory('images/top-sections'),

                FileUpload::make('image_2')
                    ->image()
                    ->disk('public')
                    ->directory('images/top-sections'),

                FileUpload::make('image_3')
                    ->image()
                    ->disk('public')
                    ->directory('images/top-sections'),

            ]);
    }
}
