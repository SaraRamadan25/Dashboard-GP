<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SafetyInfoResource\Pages;
use App\Filament\Resources\SafetyInfoResource\RelationManagers;
use App\Models\SafetyInfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SafetyInfoResource extends Resource
{
    protected static ?string $model = SafetyInfo::class;

    protected static ?string $navigationIcon = 'eos-health-and-safety-o';

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
                Tables\Columns\TextColumn::make('height')
                    ->label('height'),
                Tables\Columns\TextColumn::make('weight')
                    ->label('weight'),
                Tables\Columns\TextColumn::make('heart_rate')
                    ->label('Heart Rate'),
                Tables\Columns\TextColumn::make('height')
                    ->label('height'),
                Tables\Columns\TextColumn::make('blood_type')
                    ->label('Blood Type'),
                Tables\Columns\TextColumn::make('allergies')
                    ->label('Allergies'),
                Tables\Columns\TextColumn::make('diseases')
                    ->label('Diseases'),
                Tables\Columns\TextColumn::make('child.name')
                    ->label('Child Name'),

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
            'index' => Pages\ListSafetyInfos::route('/'),
            'create' => Pages\CreateSafetyInfo::route('/create'),
            'edit' => Pages\EditSafetyInfo::route('/{record}/edit'),
        ];
    }
}
