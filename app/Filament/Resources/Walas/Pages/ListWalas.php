<?php

namespace App\Filament\Resources\Walas\Pages;

use App\Filament\Resources\Walas\WalaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWalas extends ListRecords
{
    protected static string $resource = WalaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
