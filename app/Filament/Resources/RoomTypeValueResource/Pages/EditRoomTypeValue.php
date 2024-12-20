<?php

namespace App\Filament\Resources\RoomTypeValueResource\Pages;

use App\Filament\Resources\TypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoomTypeValue extends EditRecord
{
    protected static string $resource = TypeResource::class;

    use EditRecord\Concerns\Translatable;


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
