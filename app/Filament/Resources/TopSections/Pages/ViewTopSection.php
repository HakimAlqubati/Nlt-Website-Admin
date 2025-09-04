<?php

namespace App\Filament\Resources\TopSections\Pages;

use App\Filament\Resources\TopSections\TopSectionResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTopSection extends ViewRecord
{
    protected static string $resource = TopSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
