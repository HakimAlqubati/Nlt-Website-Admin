<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\SiteStatsOverview;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets;
use Filament\Pages\Page;

class CustomDashboard extends BaseDashboard
{
    // protected static ?string $navigationIcon = 'heroicon-o-home';

    // protected   string $view = 'filament.resources.custom-dashboard';

    public function getWidgets(): array
    {
        return [
            SiteStatsOverview::class,
            // Widgets\AccountWidget::class,
            // Widgets\FilamentInfoWidget::class,
            // أضف هنا Widgets مخصصة لو عندك
        ];
    }
}
