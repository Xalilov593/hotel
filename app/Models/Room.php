<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Room extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'room_type_id',
        'price',
        'price_child',
        'size',
        'quantity',
        'bed_qty'
    ];

    public array $translatable = ['title', 'description'];

    protected $casts = ['title' => 'array', 'description' => 'array'];

    public function types()
    {
        return $this->belongsToMany(Type::class, 'type_room');
    }
    public function bookings()
    {
        return $this->hasMany(BookingRoom::class);
    }

}
