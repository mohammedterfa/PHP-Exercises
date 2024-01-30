<?php

namespace App\Filament\Resources\EmpolyeeResource\Pages;

use App\Filament\Resources\EmpolyeeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEmpolyee extends ViewRecord
{
    protected static string $resource = EmpolyeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
