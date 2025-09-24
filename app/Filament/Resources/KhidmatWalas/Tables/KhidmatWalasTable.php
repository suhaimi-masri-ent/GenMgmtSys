<?php

namespace App\Filament\Resources\KhidmatWalas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;

class KhidmatWalasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('markaz.name')->label('Markaz')
                    ->searchable()->sortable(),
                TextColumn::make('khidmatmarkaz.name')->label('Khidmat')
                    ->searchable()->sortable(),
                TextColumn::make('ahbab.name')->label('Petugas')
                    ->searchable()->sortable(),
                TextColumn::make('date')->label('Tarikh'),
                TextColumn::make('time')->label('Masa'),
                TextColumn::make('location')->label('Lokasi')
                    ->searchable(),
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
