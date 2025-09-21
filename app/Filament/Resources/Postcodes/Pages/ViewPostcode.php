<?php

namespace App\Filament\Resources\Postcodes\Pages;

use App\Filament\Resources\Postcodes\PostcodeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPostcode extends ViewRecord
{
    protected static string $resource = PostcodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
