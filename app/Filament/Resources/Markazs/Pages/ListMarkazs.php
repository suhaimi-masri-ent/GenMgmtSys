<?php

namespace App\Filament\Resources\Markazs\Pages;

use App\Filament\Resources\Markazs\MarkazResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMarkazs extends ListRecords
{
    protected static string $resource = MarkazResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
