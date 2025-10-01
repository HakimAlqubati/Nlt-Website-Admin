<?php

namespace App\Filament\Resources\FeatureSections;

use App\Filament\Resources\FeatureSections\Pages\CreateFeatureSection;
use App\Filament\Resources\FeatureSections\Pages\EditFeatureSection;
use App\Filament\Resources\FeatureSections\Pages\ListFeatureSections;
use App\Filament\Resources\FeatureSections\Pages\ViewFeatureSection;
use App\Filament\Resources\FeatureSections\Schemas\FeatureSectionForm;
use App\Filament\Resources\FeatureSections\Schemas\FeatureSectionInfolist;
use App\Filament\Resources\FeatureSections\Tables\FeatureSectionsTable;
use App\Models\FeatureSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FeatureSectionResource extends Resource
{
    protected static ?string $model = FeatureSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedIdentification;
    protected static string | \UnitEnum | null $navigationGroup = 'Manage Content';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return FeatureSectionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FeatureSectionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FeatureSectionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => CreateFeatureSection::route('/'),
            // 'create' => CreateFeatureSection::route('/create'),
            // 'view' => ViewFeatureSection::route('/{record}'),
            // 'edit' => EditFeatureSection::route('/{record}/edit'),
        ];
    }
}
