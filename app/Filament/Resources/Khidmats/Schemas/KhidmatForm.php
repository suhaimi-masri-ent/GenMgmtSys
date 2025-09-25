<?php

namespace App\Filament\Resources\Khidmats\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;


class KhidmatForm
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
