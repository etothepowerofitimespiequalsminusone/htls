@extends('layouts.app')

@section('content')
        @foreach($bookings as $booking)

            <div class="container  @if($booking->cancelled) cancelled @else container-info @endif">
                <small>Booking number: {{ $booking->id }}</small>
                <a class="btn btn-default" style="float:right"
                   href="{{ route('booking.edit',$booking->id) }}">
                    @if($booking->cancelled)
                        Activate
                    @else
                        Cancel
                    @endif
                </a>
                <h3>User Details</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Booked from</th>
                        <th>Booked till</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $users[$booking->id]['name'] }}</td>
                        <td>{{ $users[$booking->id]['email'] }}</td>
                        <td>{{ $booking->address }}</td>
                        <td>{{ $booking->phone }}</td>
                        <td>{{ $booking->start_date }}</td>
                        <td>{{ $booking->end_date }}</td>
                    </tr>
                    </tbody>
                </table>
                <h2>Hotel: {{ $hotels[$booking->id]['name'] }}</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Room type</th>
                        <th>Number of rooms</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms[$booking->id] as $room)
                        <tr>
                            <td>{{ucwords($room['type'])}}</td>
                            <td>{{ $room['number_of_rooms'] }}</td>
                            <td>{{ $sum[$room['id']] }} &euro;</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <strong>Total: {{ $total[$booking->id] }} &euro;</strong>
            </div>
        @endforeach

@endsection