<?php

namespace App\Filament\Resources\Markazs;

use App\Filament\Resources\Markazs\Pages\CreateMarkaz;
use App\Filament\Resources\Markazs\Pages\EditMarkaz;
use App\Filament\Resources\Markazs\Pages\ListMarkazs;
use App\Filament\Resources\Markazs\Pages\ViewMarkaz;
use App\Filament\Resources\Markazs\Schemas\MarkazForm;
use App\Filament\Resources\Markazs\Schemas\MarkazInfolist;
use App\Filament\Resources\Markazs\Tables\MarkazsTable;
use App\Models\Markaz;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MarkazResource extends Resource
{
    protected static ?string $model = Markaz::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Markaz Data';

    protected static string | UnitEnum | null $navigationGroup = 'Geo Spatial';

    protected static ?int $navigationSort = 31;

    public static function form(Schema $schema): Schema
    {
        return MarkazForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return MarkazInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return MarkazsTable::configure($table);
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
            'index' => ListMarkazs::route('/'),
            'create' => CreateMarkaz::route('/create'),
            // 'view' => ViewMarkaz::route('/{record}'),
            'edit' => EditMarkaz::route('/{record}/edit'),
        ];
    }
}
