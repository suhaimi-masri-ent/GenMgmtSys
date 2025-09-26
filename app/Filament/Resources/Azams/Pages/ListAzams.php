<?php

namespace App\Filament\Resources\Azams\Pages;

use App\Filament\Resources\Azams\AzamResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAzams extends ListRecords
{
    protected static string $resource = AzamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
