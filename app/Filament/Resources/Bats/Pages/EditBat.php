<?php

namespace App\Filament\Resources\Bats\Pages;

use App\Filament\Resources\Bats\BatResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBat extends EditRecord
{
    protected static string $resource = BatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
