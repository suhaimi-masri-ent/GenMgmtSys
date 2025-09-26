<?php

namespace App\Filament\Resources\Khidmats;

use App\Filament\Resources\Khidmats\Pages\CreateKhidmat;
use App\Filament\Resources\Khidmats\Pages\EditKhidmat;
use App\Filament\Resources\Khidmats\Pages\ListKhidmats;
use App\Filament\Resources\Khidmats\Pages\ViewKhidmat;
use App\Filament\Resources\Khidmats\Schemas\KhidmatForm;
use App\Filament\Resources\Khidmats\Schemas\KhidmatInfolist;
use App\Filament\Resources\Khidmats\Tables\KhidmatsTable;
use App\Models\Khidmat;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KhidmatResource extends Resource
{
    protected static ?string $model = Khidmat::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Data Khidmat Markaz';

    protected static string | UnitEnum | null $navigationGroup = 'Personnel';

    protected static ?int $navigationSort = 42;

    public static function form(Schema $schema): Schema
    {
        return KhidmatForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return KhidmatMarkazInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return KhidmatsTable::configure($table);
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
            'index' => ListKhidmats::route('/'),
            // 'create' => CreateKhidmat::route('/create'),
            // 'view' => ViewKhidmat::route('/{record}'),
            // 'edit' => EditKhidmat::route('/{record}/edit'),
        ];
    }
}
