<?php

namespace App\Filament\Resources\Dataplps;

use App\Filament\Resources\Dataplps\Pages\CreateDataplp;
use App\Filament\Resources\Dataplps\Pages\EditDataplp;
use App\Filament\Resources\Dataplps\Pages\ListDataplps;
use App\Filament\Resources\Dataplps\Schemas\DataplpForm;
use App\Filament\Resources\Dataplps\Tables\DataplpsTable;
use App\Models\Dataplp;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DataplpResource extends Resource
{
    protected static ?string $navigationLabel = 'Daftar PLP & Admin';
    protected static ?string $model = Dataplp::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama';

    public static function form(Schema $schema): Schema
    {
        return DataplpForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DataplpsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDataplps::route('/'),
            'create' => CreateDataplp::route('/create'),
            'edit' => EditDataplp::route('/{record}/edit'),
        ];
    }
}
