<?php

namespace App\Filament\Resources\ChooseItems\Pages;

use App\Filament\Resources\ChooseItems\ChooseItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateChooseItem extends CreateRecord
{
    protected static string $resource = ChooseItemResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
