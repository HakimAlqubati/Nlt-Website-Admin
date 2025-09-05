<?php

namespace App\Filament\Resources\Integrations\Pages;

use App\Filament\Resources\Integrations\IntegrationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditIntegration extends EditRecord
{
    protected static string $resource = IntegrationResource::class;

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
