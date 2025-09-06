<?php

namespace App\Filament\Resources\Settings\Pages;

use App\Filament\Resources\Settings\SettingResource;
use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;

class CreateSetting extends CreateRecord
{
    protected static string $resource = SettingResource::class;
     protected static bool $canCreateAnother = false;

    public function mount(): void
    {
        parent::mount();

        // Pre-fill the form with existing settings
        $this->form->fill(Setting::get()->pluck("value", "key")->toArray());
    }

    public function create(bool $another = false): void
    {
        $data = $this->form->getState();

        $excludedKeys = ['loan_pdf_logo', 'site_logo'];
        $finalSettings = [];
        foreach ($data as $key => $value) {
            if (!in_array($key, $excludedKeys) && is_array($value)) {
                $finalSettings[] = ["key" => $key, "value" => json_encode($value)];
            } else {
                $finalSettings[] = ["key" => $key, "value" => $value];
            }
        }

        Setting::upsert($finalSettings, ["key"]);
     $this->sendSuccessNotification('Done','Saved successfully');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save')
                ->submit('create')
                ->color('primary')
                ->keyBindings(['mod+s']),
            Action::make('cancel')
                ->url(static::getResource()::getUrl())
                ->label('Cancel')
        ];
    }

    private function sendSuccessNotification($title, $message)
    {
        return Notification::make()
            ->title($title)
            ->body($message)
            ->icon('heroicon-o-check-circle') 
            ->duration(1000)
            ->iconColor('success')
            ->success()
            ->send();
    }

    public function getTitle(): string | Htmlable
    {
        return 'Website Settings';
    }
}
