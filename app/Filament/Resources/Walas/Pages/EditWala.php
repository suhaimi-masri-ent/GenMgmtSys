<?php

namespace App\Filament\Resources\Walas\Pages;

use App\Filament\Resources\Walas\WalaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditWala extends EditRecord
{
    protected static string $resource = WalaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
