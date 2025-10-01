<?php

namespace App\Filament\Resources\ChooseItems;

use App\Filament\Resources\ChooseItems\Pages\CreateChooseItem;
use App\Filament\Resources\ChooseItems\Pages\EditChooseItem;
use App\Filament\Resources\ChooseItems\Pages\ListChooseItems;
use App\Filament\Resources\ChooseItems\Pages\ViewChooseItem;
use App\Filament\Resources\ChooseItems\Schemas\ChooseItemForm;
use App\Filament\Resources\ChooseItems\Schemas\ChooseItemInfolist;
use App\Filament\Resources\ChooseItems\Tables\ChooseItemsTable;
use App\Models\ChooseItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ChooseItemResource extends Resource
{
    protected static ?string $model = ChooseItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSquares2x2;

    protected static ?string $recordTitleAttribute = 'title';
    protected static string | UnitEnum | null $navigationGroup = 'Manage Content';


    public static function form(Schema $schema): Schema
    {
        return ChooseItemForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ChooseItemInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ChooseItemsTable::configure($table);
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
            'index' => ListChooseItems::route('/'),
            'create' => CreateChooseItem::route('/create'),
            'view' => ViewChooseItem::route('/{record}'),
            'edit' => EditChooseItem::route('/{record}/edit'),
        ];
    }
}
