<?php

namespace App\Filament\Resources\SafetyInfoResource\Pages;

use App\Filament\Resources\SafetyInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSafetyInfo extends EditRecord
{
    protected static string $resource = SafetyInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
