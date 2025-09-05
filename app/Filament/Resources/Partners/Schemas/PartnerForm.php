<?php

namespace App\Filament\Resources\Partners\Schemas;

use App\Models\Partner;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->default(null),
                FileUpload::make('logo_path')
                    ->image()->disk('public')         // لازم يكون عندك DISK مضبوط لـ storage
                    ->directory('partners-logo')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(function () {
                        return Partner::max('sort_order') + 1;
                    }),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
