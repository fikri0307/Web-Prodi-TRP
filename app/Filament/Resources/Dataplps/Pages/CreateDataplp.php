<?php

namespace App\Filament\Resources\Dataplps\Pages;

use App\Filament\Resources\Dataplps\DataplpResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDataplp extends CreateRecord
{
    protected static string $resource = DataplpResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
