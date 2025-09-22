<?php

namespace App\Filament\Resources\Halqahs;

use App\Filament\Resources\Halqahs\Pages\CreateHalqah;
use App\Filament\Resources\Halqahs\Pages\EditHalqah;
use App\Filament\Resources\Halqahs\Pages\ListHalqahs;
use App\Filament\Resources\Halqahs\Pages\ViewHalqah;
use App\Filament\Resources\Halqahs\Schemas\HalqahForm;
use App\Filament\Resources\Halqahs\Schemas\HalqahInfolist;
use App\Filament\Resources\Halqahs\Tables\HalqahsTable;
use App\Models\Halqah;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HalqahResource extends Resource
{
    protected static ?string $model = Halqah::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Halqah Data';

    protected static string | UnitEnum | null $navigationGroup = 'Geo Spatial';

    protected static ?int $navigationSort = 32;

    public static function form(Schema $schema): Schema
    {
        return HalqahForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return HalqahInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return HalqahsTable::configure($table);
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
            'index' => ListHalqahs::route('/'),
            // 'create' => CreateHalqah::route('/create'),
            // 'view' => ViewHalqah::route('/{record}'),
            'edit' => EditHalqah::route('/{record}/edit'),
        ];
    }
}
