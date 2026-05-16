<?php

namespace App\Filament\Resources\Dataplps\Pages;

use App\Filament\Resources\Dataplps\DataplpResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDataplp extends EditRecord
{
    protected static string $resource = DataplpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
