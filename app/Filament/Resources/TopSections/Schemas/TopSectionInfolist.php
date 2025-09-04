<?php

namespace App\Filament\Resources\TopSections\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TopSectionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title_desktop'),
                TextEntry::make('title_mobile'),
                TextEntry::make('btn_primary_label'),
                TextEntry::make('btn_primary_link'),
                TextEntry::make('btn_secondary_label'),
                TextEntry::make('btn_secondary_link'),
                ImageEntry::make('image_1'),
                ImageEntry::make('image_2'),
                ImageEntry::make('image_3'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
