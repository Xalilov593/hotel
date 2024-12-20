<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class BannerResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['uz', 'ru', 'en'];
    }
    protected static ?string $model = Banner::class;


    public static function getNavigationGroup(): ?string
    {
        return  __('main.Home');
    }
    public static function getNavigationLabel(): string
    {
        return  __('main.Banner');
    }
    public static function getLabel(): ?string
    {
        return  __('main.Banner');
    }

    protected static ?int $navigationSort=1;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                ->schema([
                    Forms\Components\TextInput::make('title')
                        ->live(onBlur: true),
                    Forms\Components\Section::make(__('main.Image'))
                        ->schema([
                            SpatieMediaLibraryFileUpload::make('media')
                                ->collection('banner-images')
                                ->maxFiles(5)
                                ->imageEditor()
                                ->multiple(5)
                                ->hiddenLabel(),
                        ])
                        ->collapsible(),
                    Forms\Components\RichEditor::make('short_description')
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label(__('main.Title')),

                Tables\Columns\SpatieMediaLibraryImageColumn::make('banner-images')
                    ->label(__('main.Image'))
                    ->collection('banner-images'),
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
