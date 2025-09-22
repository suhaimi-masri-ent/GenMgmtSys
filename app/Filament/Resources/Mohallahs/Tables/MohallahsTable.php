<?php

namespace App\Filament\Resources\Mohallahs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Table;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;

class MohallahsTable
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
                TextColumn::make('halqah.name')->label('Halqah')
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
