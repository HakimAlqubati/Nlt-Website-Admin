<?php

namespace App\Filament\Resources\FeatureSections\Pages;

use App\Filament\Resources\FeatureSections\FeatureSectionResource;
use App\Models\FeatureSection;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateFeatureSection extends CreateRecord
{
    protected static string $resource = FeatureSectionResource::class;
    public function mount(): void
    {
        parent::mount();

        // تعبئة النموذج من أول سجل في قاعدة البيانات
        if ($first = FeatureSection::first()) {
            $this->form->fill([
                'section_number' => $first->section_number,
                'title' => $first->title,
                'subtitle' => $first->subtitle,
            ]);
        }
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
                ->url(static::getResource()::getUrl())->color('warning')
                ->label('Cancel')
        ];
    }
}
