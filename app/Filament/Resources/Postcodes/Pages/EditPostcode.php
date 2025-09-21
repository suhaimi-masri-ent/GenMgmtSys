<?php

namespace App\Filament\Resources\Postcodes\Pages;

use App\Filament\Resources\Postcodes\PostcodeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPostcode extends EditRecord
{
    protected static string $resource = PostcodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
