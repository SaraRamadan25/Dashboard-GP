<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatronResource\Pages;
use App\Filament\Resources\PatronResource\RelationManagers;
use App\Models\Patron;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PatronResource extends Resource
{
    protected static ?string $model = Patron::class;

    protected static ?string $navigationIcon = 'mdi-mother-heart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListPatrons::route('/'),
            'create' => Pages\CreatePatron::route('/create'),
            'edit' => Pages\EditPatron::route('/{record}/edit'),
        ];
    }
}
