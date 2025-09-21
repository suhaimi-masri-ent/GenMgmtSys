<?php

namespace App\Filament\Resources\Mohallahs\Pages;

use App\Filament\Resources\Mohallahs\MohallahResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMohallah extends EditRecord
{
    protected static string $resource = MohallahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
