<?php

namespace App\Filament\Resources\Dosens\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class DosenForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nip')
                    ->numeric()
                    ->default(0),
                TextInput::make('nama'),
                TextInput::make('jabatan'),
                FileUpload::make('foto')
                ->image()
                ->directory('dosen')
                ->disk('public'),
            ]);
    }
}
