<?php

namespace App\Filament\Resources\Amalans;

use App\Filament\Resources\Amalans\Pages\CreateAmalan;
use App\Filament\Resources\Amalans\Pages\EditAmalan;
use App\Filament\Resources\Amalans\Pages\ListAmalans;
use App\Filament\Resources\Amalans\Pages\ViewAmalan;
use App\Filament\Resources\Amalans\Schemas\AmalanForm;
use App\Filament\Resources\Amalans\Schemas\AmalanInfolist;
use App\Filament\Resources\Amalans\Tables\AmalansTable;
use App\Models\Amalan;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AmalanResource extends Resource
{
    protected static ?string $model = Amalan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Data Amalan Ahbab';

    protected static string | UnitEnum | null $navigationGroup = 'Personnel';     

    public static function form(Schema $schema): Schema
    {
        return AmalanForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return AmalanInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return AmalansTable::configure($table);
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
            'index' => ListAmalans::route('/'),
            // 'create' => CreateAmalan::route('/create'),
            // 'view' => ViewAmalan::route('/{record}'),
            // 'edit' => EditAmalan::route('/{record}/edit'),
        ];
    }
}
