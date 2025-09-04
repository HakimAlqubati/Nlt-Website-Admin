<?php

namespace App\Filament\Resources\ChooseItems\Pages;

use App\Filament\Resources\ChooseItems\ChooseItemResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewChooseItem extends ViewRecord
{
    protected static string $resource = ChooseItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
