<?php

namespace App\Filament\Resources\Masjids\Pages;

use App\Filament\Resources\Masjids\MasjidResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMasjid extends ViewRecord
{
    protected static string $resource = MasjidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
