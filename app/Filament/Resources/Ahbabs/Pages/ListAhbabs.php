<?php

namespace App\Filament\Resources\Ahbabs\Pages;

use App\Filament\Resources\Ahbabs\AhbabResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAhbabs extends ListRecords
{
    protected static string $resource = AhbabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
