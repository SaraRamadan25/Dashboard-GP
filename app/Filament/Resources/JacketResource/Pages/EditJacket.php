<?php

namespace App\Filament\Resources\JacketResource\Pages;

use App\Filament\Resources\JacketResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJacket extends EditRecord
{
    protected static string $resource = JacketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
