<?php

namespace App\Filament\Resources\OpiniResource\Pages;

use App\Filament\Resources\OpiniResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOpini extends ViewRecord
{
    protected static string $resource = OpiniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
