<?php

namespace App\Filament\Resources\Khidmats\Pages;

use App\Filament\Resources\Khidmats\KhidmatResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKhidmats extends ListRecords
{
    protected static string $resource = KhidmatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
