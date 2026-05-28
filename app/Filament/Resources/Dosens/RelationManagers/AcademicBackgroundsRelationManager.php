<?php

namespace App\Filament\Resources\Dosens\RelationManagers;

use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AcademicBackgroundsRelationManager extends RelationManager
{
    protected static string $relationship = 'academicBackgrounds';

    protected static ?string $recordTitleAttribute = 'degree';

    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('degree')
                ->required()
                ->label('Gelar Akademik'),

            TextInput::make('institution')
                ->required()
                ->label('Institusi'),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('degree')->label('Gelar Akademik'),
                TextColumn::make('institution')->label('Institusi'),
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }
}
