<?php

namespace App\Filament\Resources\Countries\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class CountryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('name')->required()->label('Nama'),
                TextInput::make('abbr')->required()->label('Singkatan'),
                TextInput::make('phone_code')->required()->label('Kod IDD'),
                TextInput::make('region')->label('Wilayah'),
            ]);
    }
}
