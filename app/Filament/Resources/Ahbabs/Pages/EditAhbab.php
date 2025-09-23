<?php

namespace App\Filament\Resources\Ahbabs\Pages;

use App\Filament\Resources\Ahbabs\AhbabResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAhbab extends EditRecord
{
    protected static string $resource = AhbabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
