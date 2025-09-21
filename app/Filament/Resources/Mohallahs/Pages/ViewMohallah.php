<?php

namespace App\Filament\Resources\Mohallahs\Pages;

use App\Filament\Resources\Mohallahs\MohallahResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMohallah extends ViewRecord
{
    protected static string $resource = MohallahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
