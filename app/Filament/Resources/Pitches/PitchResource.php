<?php

namespace App\Filament\Resources\Pitches;

use App\Filament\Resources\Pitches\Pages\CreatePitch;
use App\Filament\Resources\Pitches\Pages\EditPitch;
use App\Filament\Resources\Pitches\Pages\ListPitches;
use App\Filament\Resources\Pitches\Schemas\PitchForm;
use App\Filament\Resources\Pitches\Tables\PitchesTable;
use App\Models\Pitch;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PitchResource extends Resource
{
    protected static ?string $model = Pitch::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PitchForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PitchesTable::configure($table);
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
            'index' => ListPitches::route('/'),
            'create' => CreatePitch::route('/create'),
            'edit' => EditPitch::route('/{record}/edit'),
        ];
    }
}
