<?php

namespace App\Filament\Resources\Ahbabs\Pages;

use App\Filament\Resources\Ahbabs\AhbabResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAhbab extends ViewRecord
{
    protected static string $resource = AhbabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
