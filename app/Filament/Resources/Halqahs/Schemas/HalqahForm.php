<?php

namespace App\Filament\Resources\Halqahs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class HalqahForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required()->label('Nama'),
                TextInput::make('description')->label('Penerangan'),
                Select::make('markaz_id')->required()->label('Nama Markaz')
                    ->relationship(name: 'markaz', titleAttribute: 'name')
                    ->preload()->searchable(),
            ]);
    }
}
