<?php

namespace App\Filament\Resources\Dataplps\Pages;

use App\Filament\Resources\Dataplps\DataplpResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDataplps extends ListRecords
{
    protected static string $resource = DataplpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
