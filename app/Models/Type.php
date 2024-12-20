<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class  Type extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    use HasTranslations;

    protected $fillable = [
        'value_name',
        'icon',
        'is_active'
    ];

    public array $translatable = ['value_name'];

    protected $casts = ['value_name' => 'array'];

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'type_room');
    }


}
