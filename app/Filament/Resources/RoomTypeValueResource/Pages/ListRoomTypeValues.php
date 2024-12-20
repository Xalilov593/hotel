<?php

namespace App\Filament\Resources\RoomTypeValueResource\Pages;

use App\Filament\Resources\TypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoomTypeValues extends ListRecords
{
    protected static string $resource = TypeResource::class;

    use ListRecords\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
