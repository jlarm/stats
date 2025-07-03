<?php

namespace App\Filament\Resources\Pitches\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PitchForm
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
                    ])
                    ->required(),
                TextInput::make('ip')
                    ->label('IP')
                    ->required()
                    ->numeric(),
                TextInput::make('gs')
                    ->label('GS')
                    ->required()
                    ->numeric(),
                TextInput::make('bf')
                    ->label('BF')
                    ->required()
                    ->numeric(),
                TextInput::make('tp')
                    ->label('TP')
                    ->required()
                    ->numeric(),
                TextInput::make('tb')
                    ->label('TB')
                    ->required()
                    ->numeric(),
                TextInput::make('ts')
                    ->label('TS')
                    ->required()
                    ->numeric(),
                TextInput::make('h')
                    ->label('H')
                    ->required()
                    ->numeric(),
                TextInput::make('r')
                    ->label('R')
                    ->required()
                    ->numeric(),
                TextInput::make('er')
                    ->label('ER')
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
                    ->label('KL')
                    ->required()
                    ->numeric(),
                TextInput::make('hbp')
                    ->label('HBP')
                    ->required()
                    ->numeric(),
                TextInput::make('lob')
                    ->label('LOB')
                    ->required()
                    ->numeric(),
                TextInput::make('bk')
                    ->label('BK')
                    ->required()
                    ->numeric(),
                TextInput::make('pik')
                    ->label('PIK')
                    ->required()
                    ->numeric(),
                TextInput::make('cs')
                    ->label('CS')
                    ->required()
                    ->numeric(),
                TextInput::make('sb')
                    ->label('SB')
                    ->required()
                    ->numeric(),
                TextInput::make('wp')
                    ->label('WP')
                    ->required()
                    ->numeric(),
                TextInput::make('w')
                    ->label('W')
                    ->required()
                    ->numeric(),
                TextInput::make('l')
                    ->label('L')
                    ->required()
                    ->numeric(),
                TextInput::make('sv')
                    ->label('SV')
                    ->required()
                    ->numeric(),
                TextInput::make('bs')
                    ->label('BS')
                    ->required()
                    ->numeric(),
                TextInput::make('baa')
                    ->label('BA')
                    ->required()
                    ->numeric(),
            ]);
    }
}
