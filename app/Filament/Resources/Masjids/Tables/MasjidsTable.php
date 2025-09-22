<?php

namespace App\Filament\Resources\Masjids\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class MasjidsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('country.name')->label('Negara')
                    ->searchable()->sortable()
                    ->hidden(),
                TextColumn::make('state.name')->label('Negeri')
                    ->searchable()->sortable()
                    ->hidden(),
                TextColumn::make('city.name')->label('Bandar')
                    ->searchable()->sortable()
                    ->hidden(),
                TextColumn::make('markaz.name')->label('Markaz')
                    ->searchable()->sortable(),
                TextColumn::make('halqah.name')->label('Halqah')
                    ->searchable()->sortable(),
                // TextColumn::make('mohallah.name')->label('Mohallah')
                //     ->searchable()->sortable(),
                TextColumn::make('name')
                    ->searchable()->sortable(),
                TextColumn::make('type'),
                TextColumn::make('management'),
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
