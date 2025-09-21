<?php

namespace App\Filament\Resources\Halqahs\Pages;

use App\Filament\Resources\Halqahs\HalqahResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewHalqah extends ViewRecord
{
    protected static string $resource = HalqahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
