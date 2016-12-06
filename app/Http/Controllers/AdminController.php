<?php

namespace App\Http\Controllers;
use App\Booking;
use App\RoomBooking;
use App\User;
use App\Hotel;

class AdminController extends Controller
{
    // Middleware
    public function __construct() {
        // only Admin have access
        $this->middleware('admin');
    }
    
    public function admin() {
        return view('admin');
    }

    public function booking(){

        $rooms = [];
        $users = [];
        $hotels = [];
        $sum = [];
        $total = [];
        $bookings = Booking::all();



        foreach ($bookings as $booking) {
            $rooms[$booking->id] = RoomBooking::all()->where('booking_id', $booking->id);
            $users[$booking->id] = User::find($booking->user_id);
            $hotel = Hotel::find($booking->hotel_id);
            $hotels[$booking->id] = $hotel;
            $price_single = $hotel->price_single;
            $price_double = $hotel->price_double;
            $price_triple = $hotel->price_triple;
            $total[$booking->id] = 0;
            foreach ($rooms[$booking->id] as $room) {
                if ($room['type'] == 'single') {
                    $sum[$room['id']] = $room['number_of_rooms'] * $price_single;
                    $total[$booking->id] += $sum[$room['id']];
                } else if ($room['type'] == 'double') {
                    $sum[$room['id']] = $room['number_of_rooms'] * $price_double;
                    $total[$booking->id] += $sum[$room['id']];

                } else if ($room['type'] == 'triple') {
                    $sum[$room['id']] = $room['number_of_rooms'] * $price_triple;
                    $total[$booking->id] += $sum[$room['id']];
                }
            }
        }

        return view('adminbooking')->withBookings($bookings)->withRooms($rooms)->withUsers($users)
            ->withHotels($hotels)->withSum($sum)->withTotal($total);
    }

}
