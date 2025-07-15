<?php

namespace App\Filament\Resources\Games\Schemas;

use App\Models\Bat;
use App\Models\Pitch;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class GameForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Game Data')
                    ->tabs([
                        Tab::make('Game Details')
                            ->schema([
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
                            ]),
                        
                        Tab::make('At Bats')
                            ->schema([
                                TextInput::make('bat.pa')
                                    ->label('Plate Appearances')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.ab')
                                    ->label('At Bats')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.h')
                                    ->label('Hits')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.singles')
                                    ->label('Singles')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.doubles')
                                    ->label('Doubles')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.triples')
                                    ->label('Triples')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.hr')
                                    ->label('Home Runs')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.rbi')
                                    ->label('RBI')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.r')
                                    ->label('Runs')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.bb')
                                    ->label('Walks')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.so')
                                    ->label('Strikeouts')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.kl')
                                    ->label('Strikeouts Looking')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.hbp')
                                    ->label('Hit By Pitch')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.sac')
                                    ->label('Sacrifice Bunts')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.sf')
                                    ->label('Sacrifice Flies')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.roe')
                                    ->label('Reached On Error')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.fc')
                                    ->label('Fielder\'s Choice')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.sb')
                                    ->label('Stolen Bases')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.cs')
                                    ->label('Caught Stealing')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('bat.pik')
                                    ->label('Picked Off')
                                    ->numeric()
                                    ->default(0),
                            ]),
                            
                        Tab::make('Pitching')
                            ->schema([
                                TextInput::make('pitch.ip')
                                    ->label('Innings Pitched')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.gs')
                                    ->label('Games Started')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.bf')
                                    ->label('Batters Faced')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.tp')
                                    ->label('Total Pitches')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.tb')
                                    ->label('Total Balls')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.ts')
                                    ->label('Total Strikes')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.h')
                                    ->label('Hits')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.r')
                                    ->label('Runs')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.er')
                                    ->label('Earned Runs')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.bb')
                                    ->label('Walks')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.so')
                                    ->label('Strikeouts')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.kl')
                                    ->label('Strikeouts Looking')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.hbp')
                                    ->label('Hit By Pitch')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.lob')
                                    ->label('Left On Base')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.bk')
                                    ->label('Balks')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.pik')
                                    ->label('Pickoffs')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.cs')
                                    ->label('Caught Stealing')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.sb')
                                    ->label('Stolen Bases')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.wp')
                                    ->label('Wild Pitches')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.w')
                                    ->label('Wins')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.l')
                                    ->label('Losses')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.sv')
                                    ->label('Saves')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.bs')
                                    ->label('Blown Saves')
                                    ->numeric()
                                    ->default(0),
                                TextInput::make('pitch.baa')
                                    ->label('Batting Average Against')
                                    ->numeric()
                                    ->default(0),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }
}
