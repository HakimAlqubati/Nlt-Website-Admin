<?php

namespace App\Filament\Resources\TopSections\Pages;

use App\Filament\Resources\TopSections\TopSectionResource;
use Filament\Resources\Pages\Page;

class CustomDashboard extends Page
{
    protected static string $resource = TopSectionResource::class;

    protected string $view = 'filament.resources.top-sections.pages.custom-dashboard';
}
