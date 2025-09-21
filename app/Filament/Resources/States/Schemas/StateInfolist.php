<?php

namespace App\Filament\Resources\States\Schemas;

use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;

class StateInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                        TextEntry::make('country.name')->label('Country Name'),
                        TextEntry::make('name')->label('State name'),
                
            ]);
    }
}
