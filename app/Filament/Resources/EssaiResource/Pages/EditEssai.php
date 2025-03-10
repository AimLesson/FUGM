<?php

namespace App\Filament\Resources\EssaiResource\Pages;

use App\Filament\Resources\EssaiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEssai extends EditRecord
{
    protected static string $resource = EssaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
