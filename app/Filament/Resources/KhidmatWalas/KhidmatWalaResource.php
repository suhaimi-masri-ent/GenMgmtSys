<?php

namespace App\Filament\Resources\KhidmatWalas;

use App\Filament\Resources\KhidmatWalas\Pages\CreateKhidmatWala;
use App\Filament\Resources\KhidmatWalas\Pages\EditKhidmatWala;
use App\Filament\Resources\KhidmatWalas\Pages\ListKhidmatWalas;
use App\Filament\Resources\KhidmatWalas\Pages\ViewKhidmatWala;
use App\Filament\Resources\KhidmatWalas\Schemas\KhidmatWalaForm;
use App\Filament\Resources\KhidmatWalas\Schemas\KhidmatWalaInfolist;
use App\Filament\Resources\KhidmatWalas\Tables\KhidmatWalasTable;
use App\Models\KhidmatWala;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KhidmatWalaResource extends Resource
{
    protected static ?string $model = KhidmatWala::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Data Petugas Khidmat';

    protected static string | UnitEnum | null $navigationGroup = 'Personnel';

    public static function form(Schema $schema): Schema
    {
        return KhidmatWalaForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return KhidmatWalaInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return KhidmatWalasTable::configure($table);
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
            'index' => ListKhidmatWalas::route('/'),
            // 'create' => CreateKhidmatWala::route('/create'),
            // 'view' => ViewKhidmatWala::route('/{record}'),
            // 'edit' => EditKhidmatWala::route('/{record}/edit'),
        ];
    }
}
