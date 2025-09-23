<?php

namespace App\Filament\Resources\Ahbabs;

use App\Filament\Resources\Ahbabs\Pages\CreateAhbab;
use App\Filament\Resources\Ahbabs\Pages\EditAhbab;
use App\Filament\Resources\Ahbabs\Pages\ListAhbabs;
use App\Filament\Resources\Ahbabs\Pages\ViewAhbab;
use App\Filament\Resources\Ahbabs\Schemas\AhbabForm;
use App\Filament\Resources\Ahbabs\Schemas\AhbabInfolist;
use App\Filament\Resources\Ahbabs\Tables\AhbabsTable;
use App\Models\Ahbab;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AhbabResource extends Resource
{
    protected static ?string $model = Ahbab::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Ahbab Data';

    protected static string | UnitEnum | null $navigationGroup = 'Personnel';

    public static function form(Schema $schema): Schema
    {
        return AhbabForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return AhbabInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return AhbabsTable::configure($table);
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
            'index' => ListAhbabs::route('/'),
            // 'create' => CreateAhbab::route('/create'),
            // 'view' => ViewAhbab::route('/{record}'),
            'edit' => EditAhbab::route('/{record}/edit'),
        ];
    }
}
