<?php

namespace App\Filament\Resources\Azams\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Icon;
use Filament\Support\Icons\Heroicon;
use App\Models\Ahbab;
use App\Models\Mohallah;
use App\Models\Halqah;
// use App\Models\Amalan;

class AzamInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('halqah.name')->label('Halqah'),                
                TextEntry::make('mohallah.name')->label('Mohallah'),                
                TextEntry::make('ahbab.fullname')->label('Nama Penuh'),                
                // Select::make('amalan.name')->required()->label('Amal')
                //     ->relationship(name: 'amal', titleAttribute: 'name')
                //     ->preload()->searchable(),             
                DatePicker::make('checkin')->label('Tarikh Keluar')
                    ->belowContent([
                        Icon::make(Heroicon::InformationCircle),
                        '±7 hari pembentukan jemaah',
                    ])->format('d/m/Y')
                    ->disabled(),
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
