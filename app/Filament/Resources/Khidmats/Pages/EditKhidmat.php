<?php

namespace App\Filament\Resources\Khidmats\Pages;

use App\Filament\Resources\Khidmats\KhidmatResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKhidmat extends EditRecord
{
    protected static string $resource = KhidmatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
