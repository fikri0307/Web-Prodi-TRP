<?php

namespace App\Filament\Resources\Fasilitas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class FasilitasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                Textarea::make('deskripsi_singkat')
                    ->columnSpanFull(),
                Textarea::make('deskripsi_lengkap')
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->disk('public')
                    ->directory('fasilitas')
                    ->visibility('public')
                    ->preserveFilenames()
                    ->openable()
                    ->downloadable(),
                TextInput::make('luas_area'),
                TextInput::make('kapasitas_mahasiswa'),
                TextInput::make('status_operasional'),
            ]);
    }
}
