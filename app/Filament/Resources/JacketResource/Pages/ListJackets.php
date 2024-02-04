<?php

namespace App\Filament\Resources\JacketResource\Pages;

use App\Filament\Resources\JacketResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJackets extends ListRecords
{
    protected static string $resource = JacketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
