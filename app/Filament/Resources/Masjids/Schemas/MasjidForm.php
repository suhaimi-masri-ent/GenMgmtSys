<?php

namespace App\Filament\Resources\Masjids\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;

class MasjidForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('name')->required()->label('Nama'),
                TextInput::make('type')->label('Jenis'),
                TextInput::make('management')->label('Pentadbiran'),
                Select::make('city_id')->required()->label('Nama Bandar')
                    ->relationship(name: 'city', titleAttribute: 'name')
                    ->preload()->searchable(),
                // Select::make('mohallah_id')->required()->label('Nama Mohallah')
                //     ->relationship(name: 'mohallah', titleAttribute: 'name')
                //     ->preload()->searchable(),

            ]);
    }
}
