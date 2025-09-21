<?php

namespace App\Filament\Resources\Mohallahs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;


class MohallahForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('name')->required()->label('Nama'),
                TextInput::make('description')->label('Penerangan'),
                Select::make('halqah_id')->required()->label('Nama Halqah')
                    ->relationship(name: 'halqah', titleAttribute: 'name')
                    ->preload()->searchable(),

            ]);
    }
}
