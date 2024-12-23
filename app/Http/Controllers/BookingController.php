<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingAll($lang, Request $request){
        $validatedData = $request->validate([
           'user_id' => 'required|exists:users,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'total_amount' => 'required|numeric',
            'day' => 'required|numeric',
            'adults' => 'required|numeric',
            'children' => 'required|numeric',
            'name.*' => 'required|string|max:255',
            'age.*' => 'required|integer|min:0|max:150',
        ]);

        $booking = new Booking();





    }
}
