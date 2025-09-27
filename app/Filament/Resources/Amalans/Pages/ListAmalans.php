<?php

namespace App\Filament\Resources\Amalans\Pages;

use App\Filament\Resources\Amalans\AmalanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAmalans extends ListRecords
{
    protected static string $resource = AmalanResource::class;

    protected static ?string $title = 'Tasykil'; 
    // protected static ?string $heading = 'Nisabs'; 

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('New Tasykil'),
        ];
    }
}
