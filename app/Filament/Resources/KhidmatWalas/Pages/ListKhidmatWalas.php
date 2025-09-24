<?php

namespace App\Filament\Resources\KhidmatWalas\Pages;

use App\Filament\Resources\KhidmatWalas\KhidmatWalaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKhidmatWalas extends ListRecords
{
    protected static string $resource = KhidmatWalaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
