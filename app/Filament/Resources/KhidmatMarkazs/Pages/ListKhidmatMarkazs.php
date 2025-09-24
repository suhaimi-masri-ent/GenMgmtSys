<?php

namespace App\Filament\Resources\KhidmatMarkazs\Pages;

use App\Filament\Resources\KhidmatMarkazs\KhidmatMarkazResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKhidmatMarkazs extends ListRecords
{
    protected static string $resource = KhidmatMarkazResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
