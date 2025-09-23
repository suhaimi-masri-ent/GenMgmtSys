<?php

namespace App\Filament\Resources\Ahbabs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class AhbabsTable
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
                    ->searchable()->sortable()
                    ->hidden(),
                TextColumn::make('halqah.name')->label('Halqah')
                    ->searchable()->sortable()
                    ->hidden(),
                TextColumn::make('fullname')
                    ->searchable()->sortable(),
                TextColumn::make('nric')
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
