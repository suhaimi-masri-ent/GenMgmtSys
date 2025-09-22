<?php

namespace App\Filament\Resources\Mohallahs\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Utilities\Get;
use Illuminate\Support\Collection;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Markaz;
use App\Models\Halqah;

class MohallahForm
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
                    ->preload()->searchable()->live()
                    ->afterStateUpdated(function (Set $set) {
                        $set('city_id', null);
                        $set('markaz_id', null);
                    })
                    ->required(),
                Select::make('city_id')->label('Nama Bandar')
                    ->options(fn (Get $get): Collection => City::query()
                        ->where('state_id', $get('state_id'))
                        ->pluck('name', 'id'))                    
                    ->preload()->searchable()->live()
                    ->afterStateUpdated(function (Set $set) {
                        $set('markaz_id', null);
                        $set('halqah_id', null);
                    })
                    ->required(),
                Select::make('markaz_id')->label('Nama Markaz')
                    ->options(fn (Get $get): Collection => Markaz::query()
                        // ->where('city_id', $get('city_id'))
                        ->where('state_id', $get('state_id'))
                        ->pluck('name', 'id'))                    
                    ->preload()->searchable()->live()
                    ->afterStateUpdated(function (Set $set) {
                        $set('halqah_id', null);
                    })
                    ->required(),
                Select::make('halqah_id')->required()->label('Nama Halqah')
                    ->options(fn (Get $get): Collection => Halqah::query()
                        ->where('markaz_id', $get('markaz_id'))
                        ->pluck('name', 'id'))                    
                    ->preload()->searchable()->live()->required(),
            ]);
    }
}
