<?php

namespace App\Filament\Resources\Games\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class GameForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->required(),
                    Select::make('opponent_id')
                    ->label('Opponent')
                    ->relationship('opponent', 'name')
                    ->createOptionForm([
                        TextInput::make('name')
                            ->label('Opponent Name')
                            ->required(),
                        FileUpload::make('logo')
                            ->avatar()
                            ->image()
                            ->circleCropper(),
                    ])
                    ->required(),
                TextInput::make('opponent_score')
                    ->required()
                    ->numeric(),
                TextInput::make('our_score')
                    ->required()
                    ->numeric(),
            ]);
    }
}
