<?php

namespace App\Filament\Resources\Azams\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Enums\RecordActionsPosition;
use Filament\Support\Enums\Alignment;
use Illuminate\Support\Facades\URL;


class AzamsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('mohallah.name')->label('Mohallah')
                    ->searchable()->sortable()->hidden(),
                // TextColumn::make('amalan.name')->label('Amalan')
                //     ->searchable()->sortable(),
                TextColumn::make('ahbab.fullname')->label('Ahbab')
                    ->searchable()->sortable(),
                IconColumn::make('cuti')->label('Cuti')->boolean(),
                IconColumn::make('permission')->label('Kebenaran')->boolean(),
                TextColumn::make('expense')->label('Belanja'),
                TextColumn::make('duration')->label('Tempoh Keluar'),
                TextColumn::make('checkin')->label('Tarikh Keluar'),
                TextColumn::make('last1y')->label('1 Tahun lepas'),
                TextColumn::make('last2y')->label('2 Tahun lepas'),
                IconColumn::make('amer')->label('Amer')->boolean()->hidden(),
                IconColumn::make('pengendali')->label('Pengendali')->boolean()->hidden(),
                IconColumn::make('tertib')->label('Tertib')->boolean()->hidden(),
                TextColumn::make('description')->label('Nota')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                // ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    Action::make('Tafakut')
                        ->icon('heroicon-m-identification')
                        ->label('Tafakut')
                        ->url(fn () => URL::route('tafakut')),
            //     ])->dropdownPlacement('right-start')
            // ], position: RecordActionsPosition::BeforeColumns)
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);


    }
}
