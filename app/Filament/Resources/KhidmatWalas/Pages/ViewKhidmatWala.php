<?php

namespace App\Filament\Resources\KhidmatWalas\Pages;

use App\Filament\Resources\KhidmatWalas\KhidmatWalaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKhidmatWala extends ViewRecord
{
    protected static string $resource = KhidmatWalaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
