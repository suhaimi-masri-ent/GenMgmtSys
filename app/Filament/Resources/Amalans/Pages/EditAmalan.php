<?php

namespace App\Filament\Resources\Amalans\Pages;

use App\Filament\Resources\Amalans\AmalanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAmalan extends EditRecord
{
    protected static string $resource = AmalanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
