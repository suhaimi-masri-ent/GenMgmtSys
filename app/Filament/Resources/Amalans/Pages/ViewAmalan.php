<?php

namespace App\Filament\Resources\Amalans\Pages;

use App\Filament\Resources\Amalans\AmalanResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAmalan extends ViewRecord
{
    protected static string $resource = AmalanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
