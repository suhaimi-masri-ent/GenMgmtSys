<?php

namespace App\Filament\Resources\KhidmatWalas\Pages;

use App\Filament\Resources\KhidmatWalas\KhidmatWalaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKhidmatWala extends EditRecord
{
    protected static string $resource = KhidmatWalaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
