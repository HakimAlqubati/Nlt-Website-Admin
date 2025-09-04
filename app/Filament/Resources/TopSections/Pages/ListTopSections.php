<?php

namespace App\Filament\Resources\TopSections\Pages;

use App\Filament\Resources\TopSections\TopSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTopSections extends ListRecords
{
    protected static string $resource = TopSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
