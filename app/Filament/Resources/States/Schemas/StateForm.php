<?php

namespace App\Filament\Resources\States\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class StateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('name')->required()->label('Nama'),
                TextInput::make('abbr')->label('Singkatan'),
                TextInput::make('phone_code')->label('Kod Telefon'),
                Select::make('country_id')->required()->label('Nama Negara')
                    ->relationship(name: 'country', titleAttribute: 'name')
                    ->preload()->searchable(),
                
            ]);
    }
}
