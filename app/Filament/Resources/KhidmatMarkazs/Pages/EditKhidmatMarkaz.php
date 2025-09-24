<?php

namespace App\Filament\Resources\KhidmatMarkazs\Pages;

use App\Filament\Resources\KhidmatMarkazs\KhidmatMarkazResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKhidmatMarkaz extends EditRecord
{
    protected static string $resource = KhidmatMarkazResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
