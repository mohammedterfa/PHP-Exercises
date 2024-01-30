<?php

namespace App\Filament\Resources\EmpolyeeResource\Pages;

use App\Filament\Resources\EmpolyeeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmpolyee extends EditRecord
{
    protected static string $resource = EmpolyeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
