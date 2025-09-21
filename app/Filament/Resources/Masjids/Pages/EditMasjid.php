<?php

namespace App\Filament\Resources\Masjids\Pages;

use App\Filament\Resources\Masjids\MasjidResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMasjid extends EditRecord
{
    protected static string $resource = MasjidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
