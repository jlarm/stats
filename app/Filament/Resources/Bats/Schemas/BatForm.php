<?php

namespace App\Filament\Resources\Bats\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class BatForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->required(),
                Select::make('opponent_id')
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
                TextInput::make('pa')
                    ->label('PA')
                    ->required()
                    ->numeric(),
                TextInput::make('ab')
                    ->label('AB')
                    ->required()
                    ->numeric(),
                TextInput::make('h')
                    ->label('H')
                    ->required()
                    ->numeric(),
                TextInput::make('singles')
                    ->label('1B')
                    ->required()
                    ->numeric(),
                TextInput::make('doubles')
                    ->label('2B')
                    ->required()
                    ->numeric(),
                TextInput::make('triples')
                    ->label('3B')
                    ->required()
                    ->numeric(),
                TextInput::make('hr')
                    ->label('HR')
                    ->required()
                    ->numeric(),
                TextInput::make('rbi')
                    ->label('RBI')
                    ->required()
                    ->numeric(),
                TextInput::make('r')
                    ->label('R')
                    ->required()
                    ->numeric(),
                TextInput::make('bb')
                    ->label('BB')
                    ->required()
                    ->numeric(),
                TextInput::make('so')
                    ->label('SO')
                    ->required()
                    ->numeric(),
                TextInput::make('kl')
                    ->label('K-L')
                    ->required()
                    ->numeric(),
                TextInput::make('hbp')
                    ->label('HBP')
                    ->required()
                    ->numeric(),
                TextInput::make('sac')
                    ->label('Sac')
                    ->required()
                    ->numeric(),
                TextInput::make('sf')
                    ->label('SF')
                    ->required()
                    ->numeric(),
                TextInput::make('roe')
                    ->label('ROE')
                    ->required()
                    ->numeric(),
                TextInput::make('fc')
                    ->label('FC')
                    ->required()
                    ->numeric(),
                TextInput::make('sb')
                    ->label('SB')
                    ->required()
                    ->numeric(),
                TextInput::make('cs')
                    ->label('CS')
                    ->required()
                    ->numeric(),
                TextInput::make('pik')
                    ->label('PIK')
                    ->required()
                    ->numeric(),
            ]);
    }
}
