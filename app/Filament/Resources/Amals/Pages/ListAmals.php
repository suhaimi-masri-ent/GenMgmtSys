<?php

namespace App\Filament\Resources\Amals\Pages;

use App\Filament\Resources\Amals\AmalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAmals extends ListRecords
{
    protected static string $resource = AmalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
