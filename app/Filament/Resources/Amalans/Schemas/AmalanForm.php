<?php

namespace App\Filament\Resources\Amalans\Schemas;

use Filament\Schemas\Schema;
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
                Select::make('mohallah.name')->required()->label('Mohallah')
                    ->relationship(name: 'mohallah', titleAttribute: 'name')
                    ->preload()->searchable(),                
                Select::make('ahbab.fullname')->required()->label('Ahbab')
                    ->relationship(name: 'ahbab', titleAttribute: 'fullname')
                    ->preload()->searchable(),                
                Select::make('amal.name')->required()->label('Amal')
                    ->relationship(name: 'amal', titleAttribute: 'name')
                    ->preload()->searchable(),                
                DatePicker::make('date')->required()->label('Tarikh')
                    ->native(false)
                    ->displayFormat('d/m/Y'),
                TimePicker::make('checkin')->required()->label('Masa Mula')
                    ->native(false)
                    ->hoursStep(2)
                    ->minutesStep(15)
                    ->secondsStep(10),
                TimePicker::make('checkout')->required()->label('Masa Tamat')
                    ->native(false)
                    ->hoursStep(2)
                    ->minutesStep(15)
                    ->secondsStep(10),
                TextInput::make('location')->label('Lokasi'),
                TextInput::make('description')->label('Nota')
                    ->columnSpanFull(),
            ]);
    }
}
