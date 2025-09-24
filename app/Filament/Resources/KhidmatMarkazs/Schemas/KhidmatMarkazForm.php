<?php

namespace App\Filament\Resources\KhidmatMarkazs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;


class KhidmatMarkazForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required()->label('Amal'),
                TextInput::make('content')->label('Kandungan'),
            ]);
    }
}
