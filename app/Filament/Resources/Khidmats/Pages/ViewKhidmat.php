<?php

namespace App\Filament\Resources\Khidmats\Pages;

use App\Filament\Resources\Khidmats\KhidmatResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKhidmat extends ViewRecord
{
    protected static string $resource = KhidmatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
