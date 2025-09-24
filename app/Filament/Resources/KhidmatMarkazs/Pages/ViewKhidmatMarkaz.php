<?php

namespace App\Filament\Resources\KhidmatMarkazs\Pages;

use App\Filament\Resources\KhidmatMarkazs\KhidmatMarkazResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKhidmatMarkaz extends ViewRecord
{
    protected static string $resource = KhidmatMarkazResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
