<?php

namespace App\Filament\Resources\Amals;

use App\Filament\Resources\Amals\Pages\CreateAmal;
use App\Filament\Resources\Amals\Pages\EditAmal;
use App\Filament\Resources\Amals\Pages\ListAmals;
use App\Filament\Resources\Amals\Pages\ViewAmal;
use App\Filament\Resources\Amals\Schemas\AmalForm;
use App\Filament\Resources\Amals\Schemas\AmalInfolist;
use App\Filament\Resources\Amals\Tables\AmalsTable;
use App\Models\Amal;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AmalResource extends Resource
{
    protected static ?string $model = Amal::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Data Amalan';

    protected static string | UnitEnum | null $navigationGroup = 'Personnel';    

    protected static ?int $navigationSort = 41;

    public static function form(Schema $schema): Schema
    {
        return AmalForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return AmalInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return AmalsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAmals::route('/'),
            // 'create' => CreateAmal::route('/create'),
            // 'view' => ViewAmal::route('/{record}'),
            // 'edit' => EditAmal::route('/{record}/edit'),
        ];
    }
}
