<?php

namespace App\Filament\Resources\States;

// use App\Filament\Resources\StateResource\RelationManagers\MarkazRelationManager;
use App\Filament\Resources\States\Pages\CreateState;
use App\Filament\Resources\States\Pages\EditState;
use App\Filament\Resources\States\Pages\ListStates;
use App\Filament\Resources\States\Pages\ViewState;
use App\Filament\Resources\States\Schemas\StateForm;
use App\Filament\Resources\States\Schemas\StateInfolist;
use App\Filament\Resources\States\Tables\StatesTable;
use App\Models\State;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StateResource extends Resource
{
    protected static ?string $model = State::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'States Data';

    protected static string | UnitEnum | null $navigationGroup = 'Geo Spatial';

    protected static ?int $navigationSort = 12;

     public static function form(Schema $schema): Schema
    {
        return StateForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return StateInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return StatesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            // CitiesRelationManager::class,
            // MarkazRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStates::route('/'),
            'create' => CreateState::route('/create'),
            // 'view' => ViewState::route('/{record}'),
            'edit' => EditState::route('/{record}/edit'),
        ];
    }
}
