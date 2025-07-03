<?php

namespace App\Filament\Resources\Bats;

use App\Filament\Resources\Bats\Pages\CreateBat;
use App\Filament\Resources\Bats\Pages\EditBat;
use App\Filament\Resources\Bats\Pages\ListBats;
use App\Filament\Resources\Bats\Schemas\BatForm;
use App\Filament\Resources\Bats\Tables\BatsTable;
use App\Models\Bat;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BatResource extends Resource
{
    protected static ?string $model = Bat::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return BatForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BatsTable::configure($table);
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
            'index' => ListBats::route('/'),
            'create' => CreateBat::route('/create'),
            'edit' => EditBat::route('/{record}/edit'),
        ];
    }
}
