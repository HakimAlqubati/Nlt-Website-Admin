<?php

namespace App\Filament\Resources\TopSections;

use App\Filament\Resources\TopSections\Pages\CreateTopSection;
use App\Filament\Resources\TopSections\Pages\EditTopSection;
use App\Filament\Resources\TopSections\Pages\ListTopSections;
use App\Filament\Resources\TopSections\Pages\ViewTopSection;
use App\Filament\Resources\TopSections\Schemas\TopSectionForm;
use App\Filament\Resources\TopSections\Schemas\TopSectionInfolist;
use App\Filament\Resources\TopSections\Tables\TopSectionsTable;
use App\Models\TopSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TopSectionResource extends Resource
{
    protected static ?string $model = TopSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedViewColumns;
    protected static string | \UnitEnum | null $navigationGroup = 'Manage Content';

    protected static ?string $recordTitleAttribute = 'title_desktop';

    public static function form(Schema $schema): Schema
    {
        return TopSectionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TopSectionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TopSectionsTable::configure($table);
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
            'index' => ListTopSections::route('/'),
            'create' => CreateTopSection::route('/create'),
            'view' => ViewTopSection::route('/{record}'),
            'edit' => EditTopSection::route('/{record}/edit'),
        ];
    }
}
