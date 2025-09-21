<?php

namespace App\Filament\Resources\Mohallahs\Pages;

use App\Filament\Resources\Mohallahs\MohallahResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMohallahs extends ListRecords
{
    protected static string $resource = MohallahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
