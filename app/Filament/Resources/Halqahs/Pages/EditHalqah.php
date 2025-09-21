<?php

namespace App\Filament\Resources\Halqahs\Pages;

use App\Filament\Resources\Halqahs\HalqahResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditHalqah extends EditRecord
{
    protected static string $resource = HalqahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
