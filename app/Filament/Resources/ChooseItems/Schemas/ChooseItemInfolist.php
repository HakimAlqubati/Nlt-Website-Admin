<?php

namespace App\Filament\Resources\ChooseItems\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ChooseItemInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('sort_order')
                    ->numeric(),
                TextEntry::make('row'),
                TextEntry::make('section_number'),
                TextEntry::make('title'),
                TextEntry::make('icon_path'),
                TextEntry::make('icon_alt'),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
