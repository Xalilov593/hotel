<?php

namespace App\Filament\Resources\RoomResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\Concerns\Translatable;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TypesRelationManager extends RelationManager
{
    use Translatable;
    #[Reactive]
    public ?string $activeLocale = null;

    public static function getTranslatableLocales(): array
    {
        return ['uz', 'ru', 'en'];
    }
    protected static string $relationship = 'types';

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('value_name')
                    ->required()
                    ->maxLength(255)
                    ->label('qiymat')
                    ->placeholder('Qiymat'),
                Forms\Components\TextInput::make('icon')
                    ->required()
                    ->maxLength(255)
                    ->label('Icon')
                    ->placeholder('Icon'),
                Forms\Components\Toggle::make('is_active')
                    ->label('Is Active')
                    ->inline(false)
                    ->onIcon('heroicon-m-bolt')
                    ->offIcon('heroicon-m-user'),
                 Forms\Components\Section::make(__('main.Image'))
                     ->schema([
                         SpatieMediaLibraryFileUpload::make('media')
                             ->collection('icon-image')
                             ->maxFiles(5)
                             ->imageEditor()
                             ->hiddenLabel(),
                     ])
                     ->collapsible(),
                 ])->columns(3);

    }
    public function table(Table $table): Table
    {


        return $table
            ->recordTitleAttribute('value_name')
            ->columns([
                Tables\Columns\TextColumn::make('value_name'),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('icon-image')
                    ->label(__('main.Image'))
                    ->collection('icon-image'),
                Tables\Columns\TextColumn::make('icon'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\LocaleSwitcher::make(),
                Tables\Actions\CreateAction::make(),
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
}
