<?php

namespace App\Filament\Resources\KhidmatMarkazs;

use App\Filament\Resources\KhidmatMarkazs\Pages\CreateKhidmatMarkaz;
use App\Filament\Resources\KhidmatMarkazs\Pages\EditKhidmatMarkaz;
use App\Filament\Resources\KhidmatMarkazs\Pages\ListKhidmatMarkazs;
use App\Filament\Resources\KhidmatMarkazs\Pages\ViewKhidmatMarkaz;
use App\Filament\Resources\KhidmatMarkazs\Schemas\KhidmatMarkazForm;
use App\Filament\Resources\KhidmatMarkazs\Schemas\KhidmatMarkazInfolist;
use App\Filament\Resources\KhidmatMarkazs\Tables\KhidmatMarkazsTable;
use App\Models\KhidmatMarkaz;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KhidmatMarkazResource extends Resource
{
    protected static ?string $model = KhidmatMarkaz::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Data Khidmat Markaz';

    protected static string | UnitEnum | null $navigationGroup = 'Personnel';

    public static function form(Schema $schema): Schema
    {
        return KhidmatMarkazForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return KhidmatMarkazInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return KhidmatMarkazsTable::configure($table);
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
            'index' => ListKhidmatMarkazs::route('/'),
            // 'create' => CreateKhidmatMarkaz::route('/create'),
            // 'view' => ViewKhidmatMarkaz::route('/{record}'),
            // 'edit' => EditKhidmatMarkaz::route('/{record}/edit'),
        ];
    }
}
