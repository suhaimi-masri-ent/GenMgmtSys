<?php

namespace App\Filament\Resources\Amals\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class AmalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required()->label('Amal'),
                TextInput::make('description')->label('Kandungan'),
            ]);
    }
}
