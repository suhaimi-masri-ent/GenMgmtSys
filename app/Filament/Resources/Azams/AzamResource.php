<?php

namespace App\Filament\Resources\Azams;

use App\Filament\Resources\Azams\Pages\CreateAzam;
use App\Filament\Resources\Azams\Pages\EditAzam;
use App\Filament\Resources\Azams\Pages\ListAzams;
use App\Filament\Resources\Azams\Pages\ViewAzam;
use App\Filament\Resources\Azams\Pages\ShowTafakut;
use App\Filament\Resources\Azams\Schemas\AzamForm;
use App\Filament\Resources\Azams\Schemas\AzamInfolist;
use App\Filament\Resources\Azams\Tables\AzamsTable;
use App\Models\Azam;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Pages\Page;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AzamResource extends Resource
{
    protected static ?string $model = Azam::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Data Azam';

    protected static string | UnitEnum | null $navigationGroup = 'Personnel';  

    protected static ?int $navigationSort = 46;
    
    public static function form(Schema $schema): Schema
    {
        return AzamForm::configure($schema);
    }



    // public static function infolist(Schema $schema): Schema
    // {
    //     return AzamInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return AzamsTable::configure($table);
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
            'index' => ListAzams::route('/'),
            // 'show' => ShowTafakut::route('/{record}/show'),
            // 'create' => CreateAzam::route('/create'),
            // 'view' => ViewAzam::route('/{record}'),
            // 'edit' => EditAzam::route('/{record}/edit'),

        ];
    }
}
