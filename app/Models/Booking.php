<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Booking extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'room_id',
        'user_id',
        'title',
        'description',
        'type',
        'payment_status',
        'start_date',
        'end_date',
        'day',
        'adults',
        'children',
        'total_amount',
    ];

    public array $translatable = ['title', 'description'];

    protected $casts = ['title' => 'array', 'description' => 'array'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function guests()
    {
        return $this->hasMany(Guest::class);
    }
    public function rooms()
    {
        return $this->hasMany(BookingRoom::class);
    }

}
