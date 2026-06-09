<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                FileUpload::make('gambar')
                    ->image()
                    ->required(),
            ]);
    }
}
