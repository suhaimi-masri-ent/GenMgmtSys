<?php

namespace App\Filament\Resources\Amals\Pages;

use App\Filament\Resources\Amals\AmalResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAmal extends ViewRecord
{
    protected static string $resource = AmalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
