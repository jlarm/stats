<?php

namespace App\Filament\Resources\Pitches\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PitchesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('datetime')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('opponent.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('ip')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('gs')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('bf')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tp')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('ts')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('h')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('r')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('er')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('bb')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('so')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('kl')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('hbp')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('lob')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('bk')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('pik')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('cs')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('sb')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('wp')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('w')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('l')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('sv')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('bs')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('baa')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
