<?php

namespace App\Filament\Resources\DemoRequests\Schemas;

use Filament\Schemas\Schema;

class DemoRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }
}
