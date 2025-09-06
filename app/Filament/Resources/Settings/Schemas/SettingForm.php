<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Fieldset::make('Website Contact Info')->columnSpanFull()->columns(2)->schema([
                    TextInput::make('website_email')
                        ->label('Email')
                        ->email()
                        ->required(),

                    TextInput::make('website_whatsapp')
                        ->label('WhatsApp Number')
                        ->tel()
                        ->required(),

                    TextInput::make('website_phone')
                        ->label('Phone Number')
                        ->tel()
                        ->required(),
                ]),
            ]);
    }
}
