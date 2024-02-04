<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JacketResource\Pages;
use App\Filament\Resources\JacketResource\RelationManagers;
use App\Models\Jacket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JacketResource extends Resource
{
    protected static ?string $model = Jacket::class;

    protected static ?string $navigationIcon = 'gameicon-life-jacket';

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
            'index' => Pages\ListJackets::route('/'),
            'create' => Pages\CreateJacket::route('/create'),
            'edit' => Pages\EditJacket::route('/{record}/edit'),
        ];
    }
}
