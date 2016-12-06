<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\RoomBooking;
use Illuminate\Http\Request;
use App\Booking;
use Session;

class BookingController extends Controller
{
    public function __construct()
    {
        //to access booking functionality user must be logged in
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $bookings = [];
        $rooms = [];
        $sum = [];
        $total = [];
        $hotels = [];
        if ($user)
            $bookings = Booking::all()->where('user_id', $user->id);
        foreach ($bookings as $booking) {
            $rooms[$booking->id] = RoomBooking::all()->where('booking_id', $booking->id);
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
        return view('booking_show')->withUser($user)->withBookings($bookings)->withRooms($rooms)->withSum($sum)->withTotal($total)->withHotels($hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $date = date('Y-m-d');

        $hotel = Hotel::find($id);
        return view('book')->withId($id)->withHotel($hotel)->withDate($date);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'start_date' => 'required|date|after:yesterday',
            'end_date' => 'required|date|after:start_date',
            'number_of_single' => 'required|integer',
            'number_of_double' => 'required|integer',
            'number_of_triple' => 'required|integer',
            'address' => 'required|min:1',
            'phone' => 'required|integer'
        ));


        $booking = new Booking();
        $booking->start_date = $request->start_date;
        $booking->end_date = $request->end_date;
        $booking->address = $request->address;
        $booking->phone = $request->phone;
        $booking->user_id = $request->user_id;
        $booking->hotel_id = $request->hotel_id;
        $booking->save();

        $id = $booking->id;
        if ($request->number_of_single > 0) {
            $room_booking = new RoomBooking();
            $room_booking->type = 'single';
            $room_booking->number_of_rooms = $request->number_of_single;
            $room_booking->booking_id = $id;
            $room_booking->save();
        }
        if ($request->number_of_double > 0) {
            $room_booking = new RoomBooking();
            $room_booking->type = 'double';
            $room_booking->number_of_rooms = $request->number_of_double;
            $room_booking->booking_id = $id;
            $room_booking->save();
        }
        if ($request->number_of_triple > 0) {
            $room_booking = new RoomBooking();
            $room_booking->type = 'triple';
            $room_booking->number_of_rooms = $request->number_of_triple;
            $room_booking->booking_id = $id;
            $room_booking->save();
        }
        Session::flash('success', 'booking saved');
        return redirect()->route('booking.index');
    }

    //since very little functionality is needed I edit and save the cancel in the same method
    public function edit($id)
    {
        $booking = Booking::find($id);
        if($booking->cancelled == true)
            $booking->cancelled = false;
        else
        $booking->cancelled = true;


        $booking->save();

        Session::flash('success','booking cancelled');
        return redirect()->route('admin.booking');
    }
    public function update(Request $request,$id)
    {
//        $booking = Booking::find($id);
//        $booking->cancelled = true;
//        $booking->save();
//
//        Session::flash('success','booking cancelled');
//        return redirect()->route('admin.booking');
    }
}