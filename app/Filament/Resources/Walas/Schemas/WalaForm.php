<?php

namespace App\Filament\Resources\Walas\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Utilities\Get;
use Illuminate\Support\Collection;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use App\Models\Markaz;
use App\Models\Ahbab;
use App\Models\Khidmat;

class WalaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('markaz.name')->required()->label('Markaz')
                    ->relationship(name: 'markaz', titleAttribute: 'name')
                    ->preload()->searchable(),
                TextInput::make('ahbab.name')->label('Petugas'),
                Select::make('khidmat.name')->required()->label('Tugasan')
                    ->relationship(name: 'khidmat', titleAttribute: 'name')
                    ->preload()->searchable(),                
                DatePicker::make('date')->required()->label('Tarikh')
                    ->native(false)
                    ->displayFormat('d/m/Y'),
                TimePicker::make('time')->required()->label('Masa')
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
