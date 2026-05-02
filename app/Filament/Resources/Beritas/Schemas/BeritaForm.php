<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required()
                    ->default('0')
                    ->required(),
                Textarea::make('isi')
                    ->columnSpanFull()
                    ->required(),
                FileUpload::make('gambar')
                    ->image()
                    ->directory('berita')
                    ->disk('public')
                    ->nullable()
                    ->required(),
                DatePicker::make('tanggal_dibuat')
                    ->default(now())
                    ->required(),
                Select::make('kategori')
                    ->options([
            'Informasi umum' => 'Informasi umum',
            'Akademik' => 'Akademik',
            'Kemahasiswaan' => 'Kemahasiswaan',
        ])
                    ->required(),
            ]);
    }
}
