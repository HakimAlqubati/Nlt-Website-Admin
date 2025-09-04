<?php

namespace App\Filament\Resources\ChooseItems\Pages;

use App\Filament\Resources\ChooseItems\ChooseItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListChooseItems extends ListRecords
{
    protected static string $resource = ChooseItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
