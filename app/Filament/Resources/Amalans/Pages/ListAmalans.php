<?php

namespace App\Filament\Resources\Amalans\Pages;

use App\Filament\Resources\Amalans\AmalanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAmalans extends ListRecords
{
    protected static string $resource = AmalanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
