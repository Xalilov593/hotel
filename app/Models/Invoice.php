<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'invoice_number',
        'user_id',
        'booking_room_id',
        'total_price',
        'payment_status',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function bookingRoom()
    {
        return $this->belongsTo(BookingRoom::class);
    }
}
