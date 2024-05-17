<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SafetyInfoResource\Pages;
use App\Models\SafetyInfo;
use App\Models\Child;
use Filament\Forms;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SafetyInfoResource extends Resource
{
    protected static ?string $model = SafetyInfo::class;

    protected static ?string $navigationIcon = 'eos-health-and-safety-o';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                BelongsToSelect::make('child_id')
                    ->label('Child')
                    ->relationship('child', 'name')
                    ->placeholder('Select Child')
                    ->required(),
                TextInput::make('height')
                    ->label('Height')
                    ->placeholder('Height in centimeters')
                    ->required(),
                TextInput::make('weight')
                    ->label('Weight')
                    ->placeholder('Weight in kilograms')
                    ->required(),
                TextInput::make('heart_rate')
                    ->label('Heart Rate')
                    ->placeholder('Heart Rate in BPM')
                    ->required(),
                Forms\Components\Select::make('blood_type')
                    ->label('Blood Type')
                    ->placeholder('Select Blood Type')
                    ->options([
                        'A' => 'A',
                        'B' => 'B',
                        'AB' => 'AB',
                        'O' => 'O',
                    ])
                    ->required(),
                Forms\Components\Textarea::make('diseases')
                    ->label('Diseases')
                    ->placeholder('List of diseases')
                    ->required(),
                Forms\Components\Textarea::make('allergies')
                    ->label('Allergies')
                    ->placeholder('List of allergies')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('height')
                    ->label('Height'),
                Tables\Columns\TextColumn::make('weight')
                    ->label('Weight'),
                Tables\Columns\TextColumn::make('heart_rate')
                    ->label('Heart Rate'),
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
