<?php

namespace App\Filament\Resources\Azams\Pages;

use App\Filament\Resources\Azams\AzamResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAzam extends EditRecord
{
    protected static string $resource = AzamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
