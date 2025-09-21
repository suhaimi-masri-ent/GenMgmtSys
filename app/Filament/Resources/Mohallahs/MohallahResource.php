<?php

namespace App\Filament\Resources\Mohallahs;

use App\Filament\Resources\Mohallahs\Pages\CreateMohallah;
use App\Filament\Resources\Mohallahs\Pages\EditMohallah;
use App\Filament\Resources\Mohallahs\Pages\ListMohallahs;
use App\Filament\Resources\Mohallahs\Pages\ViewMohallah;
use App\Filament\Resources\Mohallahs\Schemas\MohallahForm;
use App\Filament\Resources\Mohallahs\Schemas\MohallahInfolist;
use App\Filament\Resources\Mohallahs\Tables\MohallahsTable;
use App\Models\Mohallah;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MohallahResource extends Resource
{
    protected static ?string $model = Mohallah::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Mohallah Data';

    protected static string | UnitEnum | null $navigationGroup = 'Geo Spatial';

    protected static ?int $navigationSort = 33;

    public static function form(Schema $schema): Schema
    {
        return MohallahForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return MohallahInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return MohallahsTable::configure($table);
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
            'index' => ListMohallahs::route('/'),
            'create' => CreateMohallah::route('/create'),
            // 'view' => ViewMohallah::route('/{record}'),
            'edit' => EditMohallah::route('/{record}/edit'),
        ];
    }
}
