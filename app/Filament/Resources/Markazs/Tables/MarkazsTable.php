<?php

namespace App\Filament\Resources\Markazs\Tables;

use App\Filament\Resources\MarkazResource\RelationManagers;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\State;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
// use Filament\Tables\Columns\TextInputColumn;


class MarkazsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('country.name')->label('Nama Negara')
                    ->searchable()->sortable(),
                TextColumn::make('state.name')->label('Nama Negeri')
                    ->searchable()->sortable(),
                TextColumn::make('name')
                    ->searchable()->sortable(),
                TextColumn::make('description')
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
