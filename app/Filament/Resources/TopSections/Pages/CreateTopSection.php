<?php

namespace App\Filament\Resources\TopSections\Pages;

use App\Filament\Resources\TopSections\TopSectionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTopSection extends CreateRecord
{
    protected static string $resource = TopSectionResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
