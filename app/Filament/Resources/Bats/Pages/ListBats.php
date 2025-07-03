<?php

namespace App\Filament\Resources\Bats\Pages;

use App\Filament\Resources\Bats\BatResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBats extends ListRecords
{
    protected static string $resource = BatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
