<?php

namespace App\Filament\Resources\EssaiResource\Pages;

use App\Filament\Resources\EssaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEssai extends ViewRecord
{
    protected static string $resource = EssaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
