<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomTypeValueResource\Pages;
use App\Models\Type;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TypeResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['uz', 'ru', 'en'];
    }

    protected static ?string $model = Type::class;
    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                            Forms\Components\TextInput::make('value_name')
                                ->required()
                                ->maxLength(255)
                                ->label('qiymat')
                                ->placeholder('Qiymat'),
                            Forms\Components\TextInput::make('icon')
                                ->maxLength(255)
                                ->label('Icon')
                                ->placeholder('Icon'),
                            Forms\Components\Toggle::make('is_active')
                                ->label('Is Active')
                                ->inline(false)
                                ->onIcon('heroicon-m-bolt')
                                ->offIcon('heroicon-m-user')
                        ])->columns(3),
                Forms\Components\Section::make(__('main.Image'))
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('media')
                            ->collection('icon-image')
                            ->maxFiles(5)
                            ->imageEditor()
                            ->hiddenLabel(),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('value_name')->searchable()->sortable(),
                TextColumn::make('icon')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('created_at'),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('icon-image')
                    ->label(__('main.Image'))
                    ->collection('icon-image'),


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

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoomTypeValues::route('/'),
            'create' => Pages\CreateRoomTypeValue::route('/create'),
            'edit' => Pages\EditRoomTypeValue::route('/{record}/edit'),
        ];
    }
}
