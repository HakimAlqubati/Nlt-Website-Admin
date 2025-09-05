<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('author_name')
                    ->required(),
                TextInput::make('author_email')
                    ->email()
                    ->default(null),

                FileUpload::make('author_image')
                    ->label('Author Image')
                    ->image()
                    ->disk('public')
                    ->directory('testimonials')
                    ->visibility('public'),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('testimonial_date'),
                TextInput::make('group_class')
                    ->required()
                    ->default('_1'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
