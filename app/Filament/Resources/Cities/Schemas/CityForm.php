<?php

namespace App\Filament\Resources\Cities\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;


class CityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('name')->required()->label('Nama'),
                TextInput::make('abbr')->required()->label('Singkatan'),
                TextInput::make('phone_code')->label('Kod Telefon'),
                Select::make('state_id')->required()->label('Nama Negeri')
                    ->relationship(name: 'state', titleAttribute: 'name')
                    ->preload()->searchable(),

            ]);
    }
}
