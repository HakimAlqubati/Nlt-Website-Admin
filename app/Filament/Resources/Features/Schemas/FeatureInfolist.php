<?php

namespace App\Filament\Resources\Features\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class FeatureInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('sort_order')
                    ->numeric(),
                TextEntry::make('section_number'),
                TextEntry::make('title'),
                ImageEntry::make('image_path'),
                ImageEntry::make('image_alt'),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
