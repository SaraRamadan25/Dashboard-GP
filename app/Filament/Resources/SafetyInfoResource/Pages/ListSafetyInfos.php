<?php

namespace App\Filament\Resources\SafetyInfoResource\Pages;

use App\Filament\Resources\SafetyInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSafetyInfos extends ListRecords
{
    protected static string $resource = SafetyInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
