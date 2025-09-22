<?php

namespace App\Filament\Resources\Markazs\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Utilities\Get;
use Illuminate\Support\Collection;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Hidden;
use App\Models\Country;
use App\Models\State;


class MarkazForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required()->label('Nama'),
                TextInput::make('description')->label('Penerangan'),
                Select::make('country_id')->label('Nama Negara')
                    ->relationship(name: 'country', titleAttribute: 'name')
                    ->preload()->searchable()
                    ->live()
                    ->afterStateUpdated(function (Set $set) {
                        $set('state_id', null);
                    })
                    ->required(),
                Select::make('state_id')->label('Nama Negeri')
                    ->options(fn (Get $get): Collection => State::query()
                        ->where('country_id', $get('country_id'))
                        ->pluck('name', 'id'))                    
                    ->preload()->searchable()->required(),

            ]);
    }
}
