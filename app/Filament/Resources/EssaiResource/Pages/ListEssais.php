<?php

namespace App\Filament\Resources\EssaiResource\Pages;

use App\Filament\Resources\EssaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEssais extends ListRecords
{
    protected static string $resource = EssaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
