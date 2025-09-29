<?php

namespace App\Filament\Resources\Azams\Pages;

use Filament\Schemas\Schema;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use Filament\Actions\EditAction;
// use Filament\Form\Concerns\HasRecord;
use Filament\Forms\Contracts\HasForms; // as HasFormsContract;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use App\Filament\Resources\Azams\Schemas\AzamForm;
// use App\Filament\Resources\Azams\Pages\HasForms;
use App\Filament\Resources\Azams\AzamResource;
// use Filament\Resources\Pages\ViewRecord;
use App\Models\Ahbab;
use App\Models\Mohallah;
use App\Models\Halqah;
use App\Models\Azam;
// use App\Models\Amalan;

class ShowTafakut extends Page //implements HasForms
{
    // use HasForms;
    use InteractsWithRecord;

    public ?array $dataTafakut = [];

    protected static string $resource = AzamResource::class;

    protected string $view = 'filament.resources.azams.pages.show-tafakut';

    public function mount(int|string $record): void
    {
        $this->record = $this->resolveRecord($record);
        // dd($this->record);
    }

    // public function mount(): void 
    // {
    //     $this->form->fill();
    // }

    // public function form(Form $form): Form
    // protected function getFormSchema(): array
    // {
    //     return $form
    //         ->schema([
    //             Select::make('mohallah_id')->required()->label('Mohallah')
    //                 ->relationship(name: 'mohallah', titleAttribute: 'name')
    //                 ->preload()->searchable(),                
    //             Select::make('ahbab_id')->required()->label('Ahbab')
    //                 ->relationship(name: 'ahbab', titleAttribute: 'fullname')
    //                 ->preload()->searchable(),                 
    //         ])
    //         ->statePath('dataTafakut');
    // }




}
