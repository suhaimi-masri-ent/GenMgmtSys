<?php

namespace App\Filament\Resources\Markazs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Hidden;


class MarkazForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required()->label('Nama'),
                TextInput::make('description')->label('Penerangan'),
                Select::make('state_id')->required()->label('Nama Negeri')
                    ->relationship(name: 'state', titleAttribute: 'name')
                    ->preload()->searchable(),
                // Hidden::make('country_id')
                //     ->relationship(name: 'state', titleAttribute: 'name'),

            ]);
    }
}
