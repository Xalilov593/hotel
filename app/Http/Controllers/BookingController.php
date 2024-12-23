<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingRoom;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{

    public function bookingAll($lang, Request $request)
    {
//        dd($request->all());
        $validatedData = $request->validate([
            'room_id' => 'required',
            'user_id' => 'required|exists:users,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'total_amount' => 'required|numeric',
            'day' => 'required|numeric',
            'adults' => 'nullable|numeric|min:1', // adults maydoni kerakli qiymat va raqam bo'lishi kerak
            'children' => 'nullable|numeric|min:0', // children maydoni bo'sh bo'lishi mumkin yoki raqam bo'lishi kerak
            'name.*' => 'nullable|string|max:255',
            'age.*' => 'nullable|integer|min:0|max:150',
        ]);
        $adults = isset($validatedData['adults']) && $validatedData['adults'] !== null ? $validatedData['adults'] : 1;

        $children = isset($validatedData['children']) && $validatedData['children'] !== null ? $validatedData['children'] : 0;

        DB::beginTransaction();
        try {

            $booking = new Booking();
            $booking->user_id = $validatedData['user_id'];
            $booking->start_date = $validatedData['start_date'];
            $booking->end_date = $validatedData['end_date'];
            $booking->total_amount = $validatedData['total_amount'];
            $booking->day = $validatedData['day'];
            $booking->payment_status = 'new';
            $booking->save();

            $booking_room = new BookingRoom();
            $booking_room->room_id=$validatedData['room_id'];
            $booking_room->booking_id = $booking->id;
            $booking_room->adults = $validatedData['adults'];
            $booking_room->children = $validatedData['children'];
            $booking_room->save();

            if (!empty($validatedData['name']) && !empty($validatedData['age'])) {
                foreach ($validatedData['name'] as $key => $name) {
                    if ($name !== null && $validatedData['age'][$key] !== null) {
                        $guest = new Guest();
                        $guest->booking_id = $booking->id;
                        $guest->name = $name;
                        $guest->age = $validatedData['age'][$key];
                        $guest->save();
                    }
                }
            }

            DB::commit();

            return redirect()->route('invoice', [$lang, $booking->user_id] );
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'message' => 'An error occurred while creating the booking.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


}
