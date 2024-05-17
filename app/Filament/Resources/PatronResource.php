<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatronResource\Pages;
use App\Filament\Resources\PatronResource\RelationManagers;
use App\Models\Patron;
use Cheesegrits\FilamentPhoneNumbers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Rawilk\FilamentPasswordInput\Password;

class PatronResource extends Resource
{
    protected static ?string $model = Patron::class;

    protected static ?string $navigationIcon = 'mdi-mother-heart';
    protected static ?string $label = 'Parents';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required(),
                Password::make('password')
                    ->label('Password')
                    ->required(),
                FilamentPhoneNumbers\Forms\Components\PhoneNumber::make('phone')
                    ->label('Phone')
                    ->required(),
                Forms\Components\FileUpload::make('avatar')
                    ->label('Photo')
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name'),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email'),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Phone'),
                Tables\Columns\ImageColumn::make('avatar')
                    ->label('Photo'),
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
