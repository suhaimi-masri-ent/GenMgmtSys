<?php

namespace App\Filament\Resources\Amalans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class AmalansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('mohallah.name')->label('Mohallah')
                    ->searchable()->sortable()
                    ->hidden(),
                TextColumn::make('amal.name')->label('Amal')
                    ->searchable()->sortable(),
                TextColumn::make('ahbab.fullname')->label('Ahbab')
                    ->searchable()->sortable(),
                TextColumn::make('date')->label('Tarikh')
                    ->searchable()->sortable(),
                TextColumn::make('checkin')->label('Masa Mula')->dateTime('h:i A'),
                TextColumn::make('checkout')->label('Masa Tamat')->dateTime('h:i A'),
                TextColumn::make('location')->label('Lokasi')
                    ->searchable()->sortable()
                    ->hidden(),
                TextColumn::make('description')->label('Nota')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
