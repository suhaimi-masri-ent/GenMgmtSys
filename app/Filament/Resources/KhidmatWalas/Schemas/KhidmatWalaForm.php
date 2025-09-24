<?php

namespace App\Filament\Resources\KhidmatWalas\Schemas;

use Filament\Schemas\Schema;

class KhidmatWalaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('markaz.name')->required()->label('Markaz'),
                TextInput::make('ahbab.name')->label('Petugas'),
                TextInput::make('khidmatmarkaz.name')->required()->label('Tugasan'),
                DatePicker::make('date')->required()->label('Tarikh'),
                TimePicker::make('time')->required()->label('Masa'),
                TextInput::make('location')->label('Lokasi'),
                TextInput::make('description')->label('Nota'),
            ]);
    }
}
