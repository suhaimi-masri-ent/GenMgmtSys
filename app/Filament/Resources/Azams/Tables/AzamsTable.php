<?php

namespace App\Filament\Resources\Azams\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\Action;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;


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
                ViewAction::make()->iconButton(),
                EditAction::make()->iconButton(),
                Action::make('Tafakut')
                    ->icon('heroicon-m-identification')
                    ->iconButton()
                    ->label('Tafakut'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);

            // ->actions([
            //     Action::make('promote')
            //         ->label('Promote Student')
            //         ->icon('heroicon-o-arrow-up')
            //         ->color('success')
            //         ->requiresConfirmation()
            //         ->action(function (Student $record) {
            //             $record->standard_id++;
            //             $record->save();
            //             // Optionally, add a notification
            //             Filament::notify('success', 'Student promoted successfully!');
            //         }),
            // ]);

    }
}
