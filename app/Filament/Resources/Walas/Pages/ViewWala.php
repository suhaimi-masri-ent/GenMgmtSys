<?php

namespace App\Filament\Resources\Walas\Pages;

use App\Filament\Resources\Walas\WalaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewWala extends ViewRecord
{
    protected static string $resource = WalaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
