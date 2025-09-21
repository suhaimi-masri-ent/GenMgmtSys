<?php

namespace App\Filament\Resources\Markazs\Pages;

use App\Filament\Resources\Markazs\MarkazResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMarkaz extends EditRecord
{
    protected static string $resource = MarkazResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
