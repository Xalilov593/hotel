<?php

namespace App\Filament\Resources;

use App\Enums\BookingStatus;
use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use App\Models\Role;
use App\Models\Room;
use Carbon\Carbon;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Hamcrest\Core\Set;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\ValidationException;
use Filament\Forms\Components\Wizard;


use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mockery\Matcher\Closure;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\DatePicker::make('start_date')
                            ->required()
                            ->minDate(Carbon::today())
                            ->afterStateUpdated(function (?string $state, ?string $old, Forms\Set $set, Forms\Get $get) {
                                $endDate = $get('end_date');
                                if ($state && $endDate) {
                                    $days = abs(Carbon::parse($endDate)->diffInDays(Carbon::parse($state)));
                                    $set('day', $days);
                                }
                            })
                            ->closeOnDateSelection()
                            ->native(false),

                        Forms\Components\DatePicker::make('end_date')
                            ->required()
                            ->minDate(function (Forms\Get $get) {
                                return Carbon::parse($get('start_date')) ?: Carbon::today();
                            })
                            ->afterStateUpdated(function (?string $state, ?string $old, Forms\Set $set, Forms\Get $get) {
                                $startDate = $get('start_date');
                                if ($state && $startDate) {
                                    $days = abs(Carbon::parse($state)->diffInDays(Carbon::parse($startDate)));
                                    $set('day', $days);
                                }
                            })
                            ->closeOnDateSelection()
                            ->native(false),

                        Forms\Components\TextInput::make('day')
                            ->label('Kunlar soni')
                            ->disabled()
                            ->reactive()
                            ->hidden(),
                        Forms\Components\ToggleButtons::make('payment_status')
                            ->inline()
                            ->options(BookingStatus::class)
                            ->required(),
                        Forms\Components\Select::make('user_id')
                            ->label('User')
                            ->relationship('user', 'name')
                            ->preload()
                            ->searchable()
                            ->required()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('email')
                                    ->label('Email address')
                                    ->required()
                                    ->email()
                                    ->maxLength(255)
                                    ->unique(),

                                Forms\Components\TextInput::make('phone')
                                    ->maxLength(255),
                                TextInput::make('password')
                                    ->label('Password')
                                    ->required(),
                                Forms\Components\Select::make('roles')
                                    ->label('Roli')
                                    ->relationship('roles', 'name')
                                    ->required()
                                    ->options(function () {
                                        return Role::where('name', 'client')->pluck('name', 'id');
                                    }),
                            ])
                            ->createOptionAction(function (Action $action) {
                                return $action
                                    ->modalHeading('Create customer')
                                    ->modalSubmitActionLabel('Create customer')
                                    ->modalWidth('lg');
                            }),

                    ])->columns(2),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Repeater::make('rooms')
                            ->relationship('rooms')
                            ->schema([
                                Forms\Components\Select::make('room_id')
                                    ->label('Room')
                                    ->options(Room::all()->pluck('bed_qty', 'id'))
                                    ->required(),

                                Forms\Components\TextInput::make('adults')
                                    ->numeric()
                                    ->default(1)
                                    ->minValue(1)
                                    ->label('Adults'),

                                Forms\Components\TextInput::make('children')
                                    ->numeric()
                                    ->default(0)
                                    ->label('Children'),
                            ])->columns(3)
                            ->defaultItems(1)
                            ->addable()
                            ->deletable(),
                    ]),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Toggle::make('type')->label('Mehmonlar uchun')->inline(false)->live()->columnSpanFull(),
                        Forms\Components\Repeater::make('guests')
                            ->relationship('guests')
                            ->visible(fn(Forms\Get $get): bool => ($get('type')))
                            ->schema([
                                TextInput::make('name')->required(),
                                TextInput::make('age')->required()->numeric()->minValue(1),
                            ])->columns(2)
                    ])->columnSpanFull(),

            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->searchable()->sortable()->separator(),
                TextColumn::make('payment_status'),
                TextColumn::make('total_amount'),
                TextColumn::make('day'),
                TextColumn::make('start_date'),
                TextColumn::make('end_date'),


            ])
            ->filters([

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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
