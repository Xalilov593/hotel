<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomResource\Pages;
use App\Filament\Resources\RoomResource\RelationManagers;
use App\Models\Room;
use App\Models\Type;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoomResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['uz', 'ru', 'en'];
    }
    protected static ?string $model = Room::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Room name'),
                        Forms\Components\Select::make('types')
                            ->label('Room Type')
                            ->preload()
                            ->relationship('types', 'value_name')
                            ->required()
                            ->multiple()
                            ->searchable(),
                        Select::make('bed_qty')
                            ->label('Bed Quantity')
                            ->options([
                                1 => '1 Bed',
                                2 => '2 Beds',
                                3 => '3 Beds',
                                4 => '4 Beds',
                                5 => '5 Beds',
                            ])
                            ->required(),


                    ])->columns(3),

                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('price')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('price_child')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('size')
                            ->required()
                            ->numeric(),
                        TextInput::make('quantity')
                            ->required()
                            ->numeric(),

                    ])->columns(4),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\RichEditor::make('description')
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->limit(20),
                Tables\Columns\TextColumn::make('bed_qty'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('price_child'),
                Tables\Columns\TextColumn::make('size'),
                Tables\Columns\TextColumn::make('quantity'),

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
            RelationManagers\TypesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }
}
