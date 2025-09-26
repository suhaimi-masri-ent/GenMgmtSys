<?php

namespace App\Filament\Resources\Azams\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Text;
use Filament\Support\Enums\FontWeight;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Checkbox;
use Filament\Schemas\Components\Icon;
use Filament\Support\Icons\Heroicon;
// use Filament\Actions\Action;
use App\Models\Ahbab;
use App\Models\Mohallah;
// use App\Models\Amalan;

class AzamForm
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
                // Select::make('amalan.name')->required()->label('Amal')
                //     ->relationship(name: 'amal', titleAttribute: 'name')
                //     ->preload()->searchable(),             
                DatePicker::make('checkin')->required()->label('Tarikh Keluar')
                    ->belowContent([
                        Icon::make(Heroicon::InformationCircle),
                        '±7 hari pembentukan jemaah',
                    ])
                    ->native(false)
                    ->displayFormat('d/m/Y'),
                Grid::make(2)
                    ->schema([
                        TextInput::make('duration')->label('Tempoh'),    
                        TextInput::make('expense')->label('Belanja'),    
                    ]),
                TextInput::make('last1y')->label('1 Tahun lepas'),    
                TextInput::make('last2y')->label('2 Tahun lepas'),    
                Grid::make(2)
                    ->schema([
                        Toggle::make('cuti')->label('Cuti'),
                        Toggle::make('permission')->label('Kebenaran'),
                    ]),
                Grid::make(3)
                    ->schema([
                        Toggle::make('amer')->label('Amer'),
                        Toggle::make('pengendali')->label('Pengendali'),
                        Toggle::make('tertib')->label('Tertib'),
                    ]),
                TextInput::make('description')->label('Nota')
                    ->columnSpanFull(),
            ]);
    }
}
