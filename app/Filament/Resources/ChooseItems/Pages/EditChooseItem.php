<?php

namespace App\Filament\Resources\ChooseItems\Pages;

use App\Filament\Resources\ChooseItems\ChooseItemResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditChooseItem extends EditRecord
{
    protected static string $resource = ChooseItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
