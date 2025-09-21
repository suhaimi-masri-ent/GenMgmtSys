<?php

namespace App\Filament\Resources\Postcodes;

use App\Filament\Resources\Postcodes\Pages\CreatePostcode;
use App\Filament\Resources\Postcodes\Pages\EditPostcode;
use App\Filament\Resources\Postcodes\Pages\ListPostcodes;
use App\Filament\Resources\Postcodes\Pages\ViewPostcode;
use App\Filament\Resources\Postcodes\Schemas\PostcodeForm;
use App\Filament\Resources\Postcodes\Schemas\PostcodeInfolist;
use App\Filament\Resources\Postcodes\Tables\PostcodesTable;
use App\Models\Postcode;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PostcodeResource extends Resource
{
    protected static ?string $model = Postcode::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Postcode Data';

    protected static string | UnitEnum | null  $navigationGroup = 'Geo Spatial';

    public static function form(Schema $schema): Schema
    {
        return PostcodeForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return PostcodeInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return PostcodesTable::configure($table);
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
            'index' => ListPostcodes::route('/'),
            'create' => CreatePostcode::route('/create'),
            'view' => ViewPostcode::route('/{record}'),
            'edit' => EditPostcode::route('/{record}/edit'),
        ];
    }
}
