<?php

namespace App\Filament\Resources\Bats\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BatsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('datetime')
                    ->date()
                    ->sortable(),
                TextColumn::make('pa')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('ab')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('h')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('singles')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('doubles')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('triples')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('hr')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('rbi')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('r')
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
                TextColumn::make('sac')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('sf')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('roe')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('fc')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('sb')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('sc')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('pik')
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
