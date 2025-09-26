<?php

namespace App\Filament\Resources\Amalans\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use App\Models\Ahbab;
use App\Models\Mohallah;
use App\Models\Amal;

class AmalanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('mohallah_id')->required()->label('Mohallah')
                    ->relationship(name: 'mohallah', titleAttribute: 'name')
                    ->preload()->searchable(),                
                Select::make('ahbab_id')->required()->label('Ahbab')
                    ->relationship(name: 'ahbab', titleAttribute: 'fullname')
                    ->preload()->searchable(),                
                Select::make('amal_id')->required()->label('Amal')
                    ->relationship(name: 'amal', titleAttribute: 'name')
                    ->preload()->searchable(),                
                DatePicker::make('date')->required()->label('Tarikh')
                    ->native(false)
                    ->displayFormat('d/m/Y'),
                Grid::make(2)
                    ->schema([
                        TimePicker::make('checkin')->required()->label('Masa Mula')
                            ->native(false)
                            // ->hoursStep(2)
                            // ->minutesStep(15)
                            ->seconds(false),
                        TimePicker::make('checkout')->required()->label('Masa Tamat')
                            ->native(false)
                            // ->hoursStep(2)
                            // ->minutesStep(15)
                            ->seconds(false),
                    ]),
                TextInput::make('location')->label('Lokasi'),
                TextInput::make('description')->label('Nota')
                    ->columnSpanFull(),
            ]);
    }
}
