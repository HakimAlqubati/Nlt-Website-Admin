<?php

namespace App\Filament\Widgets;

use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;   // ✅ الكلاس الصحيح
use Illuminate\Support\Carbon;

class SiteStatsOverview extends BaseWidget
{
    // protected static ?string $heading = 'Site Overview';

    protected function getStats(): array   // ✅ لاحظ اسم الميثود لازم getStats بدل getCards
    {
        $safeCount = function (string $modelClass, ?callable $query = null) {
            if (! class_exists($modelClass)) {
                return 0;
            }
            $q = $modelClass::query();
            if ($query) {
                $q = $query($q);
            }
            return $q->count();
        };

        $faqsCount          = $safeCount(\App\Models\Faq::class);
        $testimonialsCount  = $safeCount(\App\Models\Testimonial::class);
        $integrationsCount  = $safeCount(\App\Models\Integration::class);

        $totalFeaturs     = $safeCount(\App\Models\Feature::class);
        $usersThisMonth     = $safeCount(
            \App\Models\User::class,
            fn($q) =>
            $q->whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])
        );

        return [
            Stat::make('FAQs', number_format($faqsCount))->color('primary')
                ->icon('heroicon-o-question-mark-circle'),

            Stat::make('Testimonials', number_format($testimonialsCount))
                ->icon('heroicon-o-chat-bubble-left-ellipsis'),

            Stat::make('Integrations', number_format($integrationsCount))
                ->icon('heroicon-o-rectangle-stack')->extraAttributes(['class' => 'bg-purple-600 text-white rounded-lg shadow']),




            Stat::make('Features', number_format($totalFeaturs))
                ->icon(Heroicon::OutlinedSparkles),
        ];
    }
}
