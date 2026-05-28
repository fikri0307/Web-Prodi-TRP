<?php

namespace App\Filament\Resources\Dataplps\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class DataplpForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nip')
                    ->default(0)
                    ->required()
                    ->maxLength(50)
                    ->rule('regex:/^[0-9]+$/')
                    ->validationMessages([
                    'regex' => 'NIP hanya boleh angka.',
                    ]),
                TextInput::make('nama'),
                TextInput::make('jabatan'),
                 FileUpload::make('foto')
                ->image()
                ->directory('dataplp')
                ->disk('public'),
            ]);
    }
}
