<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JacketResource\Pages;
use App\Filament\Resources\JacketResource\RelationManagers;
use App\Models\Jacket;
use App\Models\User;
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
    protected static ?string $label = 'Life Shirts';

    protected static ?string $navigationIcon = 'gameicon-life-jacket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('modelno')
                    ->label('Model Number')
                    ->required()
                    ->unique(),
                Forms\Components\Select::make('user_id')
                    ->label('User')
                    ->options(
                        User::all()->pluck('name', 'id')->toArray()
                    )
                    ->required(),
                Forms\Components\TextInput::make('batteryLevel')
                    ->label('Battery Level')
                    ->rules('numeric', 'min:0', 'max:100')
                    ->required(),
                Forms\Components\DateTimePicker::make('start_rent_time')
                    ->label('Start Rent Time')
                    ->required(),
                Forms\Components\DateTimePicker::make('end_rent_time')
                    ->label('End Rent Time')
                    ->required(),
                Forms\Components\Select::make('area_id')
                    ->label('Area')
                    ->options(
                        \App\Models\Area::all()->pluck('name', 'id')->toArray()
                    )
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('modelno')
                    ->label('Model Number'),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('User'),
                Tables\Columns\TextColumn::make('batteryLevel')
                    ->label('Battery Level'),
                Tables\Columns\TextColumn::make('start_rent_time')
                    ->label('Start Rent Time')
                    ->date('F j, Y g a'),
                Tables\Columns\TextColumn::make('end_rent_time')
                    ->label('End Rent Time')
                    ->date('F j, Y g a'),

                Tables\Columns\TextColumn::make('user.name')
                    ->label('Parent Name')
                    ->badge()
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
