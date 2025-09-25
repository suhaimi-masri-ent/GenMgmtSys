<?php

namespace App\Filament\Resources\Amals\Pages;

use App\Filament\Resources\Amals\AmalResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAmal extends EditRecord
{
    protected static string $resource = AmalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
