<?php

namespace App\Filament\Resources\Halqahs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;


class HalqahsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('country.name')->label('Negara')
                    ->searchable()->sortable(),
                TextColumn::make('state.name')->label('Negeri')
                    ->searchable()->sortable(),
                TextColumn::make('city.name')->label('Bandar')
                    ->searchable()->sortable(),
                TextColumn::make('markaz.name')->label('Markaz')
                    ->searchable()->sortable(),
                TextColumn::make('name')
                    ->searchable()->sortable(),
                TextColumn::make('description')
                    ->hidden()
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
