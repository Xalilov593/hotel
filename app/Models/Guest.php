<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{

    protected $fillable = ['booking_id', 'name', 'age'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
