<?php

namespace App\Filament\Resources\Walas;

use App\Filament\Resources\Walas\Pages\CreateWala;
use App\Filament\Resources\Walas\Pages\EditWala;
use App\Filament\Resources\Walas\Pages\ListWalas;
use App\Filament\Resources\Walas\Pages\ViewWala;
use App\Filament\Resources\Walas\Schemas\WalaForm;
use App\Filament\Resources\Walas\Schemas\WalaInfolist;
use App\Filament\Resources\Walas\Tables\WalasTable;
use App\Models\Wala;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WalaResource extends Resource
{
    protected static ?string $model = Wala::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Data Petugas Khidmat';

    protected static string | UnitEnum | null $navigationGroup = 'Personnel';

    protected static ?int $navigationSort = 45;

    public static function form(Schema $schema): Schema
    {
        return WalaForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return WalaInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return WalasTable::configure($table);
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
            'index' => ListWalas::route('/'),
            // 'create' => CreateWala::route('/create'),
            // 'view' => ViewWala::route('/{record}'),
            // 'edit' => EditWala::route('/{record}/edit'),
        ];
    }
}
