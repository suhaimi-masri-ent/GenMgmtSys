<?php

namespace App\Filament\Resources\Halqahs\Pages;

use App\Filament\Resources\Halqahs\HalqahResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHalqahs extends ListRecords
{
    protected static string $resource = HalqahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
