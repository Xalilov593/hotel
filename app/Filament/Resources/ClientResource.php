<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use App\Models\Role;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClientResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->label('Ismi')
                            ->placeholder('Ismini kiriting')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->label('Email manzili')
                            ->placeholder('Email manzilni kiriting')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->required()
                            ->label('Telefon')
                            ->placeholder('Telefon raqami +998 xx xxx xx xx formatida bo\'lishi kerak')
                            ->regex('/^\+998\d{2}\d{3}\d{2}\d{2}$/'),
                        TextInput::make('phone_secondary')
                            ->label('Qo\'shimcha telefon')
                            ->placeholder('Telefon raqami +998 xx xxx xx xx formatida bo\'lishi kerak')
                            ->regex('/^\+998\d{2}\d{3}\d{2}\d{2}$/'),
                    ])->columns(2),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('password')
                            ->password()
                            ->label('Parol ')
                            ->placeholder('Parolni kiriting')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('password_confirmation')
                            ->password()
                            ->label('Parol ')
                            ->placeholder('Parolni kiriting')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('roles')
                            ->label('Roli')
                            ->relationship('roles', 'name')
                            ->required()
                            ->options(function () {
                                return Role::where('name', 'client')->pluck('name', 'id');
                            }),
                    ])->columns(3),

                Forms\Components\Select::make('permissions')
                    ->multiple()
                    ->label('Ruxsatni tanlang')
                    ->placeholder('Ruxsatni tanlang')
                    ->relationship('permissions', 'name')
                    ->preload()
                    ->hidden()
            ])->columns(2);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')->label('Ismi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')->label('Email manzil')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('phone_secondary')->label('Qo\'shimcha telefon'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Tarixi')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->label('Tarix')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where(function ($query) {
                $query->whereHas('roles', function ($query) {
                    $query->where('name', '=', 'client');
                })
                    ->orWhereDoesntHave('roles');
            });
    }
}
