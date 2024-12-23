<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class About extends Model implements HasMedia
{
    use HasTranslations, InteractsWithMedia;
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];
    public array $translatable = ['title', 'description'];

    protected $casts = ['title' => 'array', 'description' => 'array'];
}
