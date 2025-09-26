<?php

namespace App\Filament\Resources\Azams\Pages;

use App\Filament\Resources\Azams\AzamResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAzam extends ViewRecord
{
    protected static string $resource = AzamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
