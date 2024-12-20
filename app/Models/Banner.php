<?php

namespace App\Models;

use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Banner extends Model implements HasMedia
{

    use HasTranslations, InteractsWithMedia;
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
    ];
    public array $translatable = ['title', 'short_description'];

    protected $casts = ['title' => 'array', 'short_description' => 'array'];
}
