<?php

namespace App\Filament\Resources\Azams\Pages;

use App\Filament\Resources\Azams\AzamResource;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;

class ShowTafakut extends Page
{
    use InteractsWithRecord;

    protected static string $resource = AzamResource::class;

    protected string $view = 'filament.resources.azams.pages.show-tafakut';

    public function mount(int|string $record): void
    {
        $this->record = $this->resolveRecord($record);
        // dd($this->record);
    }
}
