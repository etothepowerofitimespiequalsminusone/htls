@extends('layouts.app')

@section('content')
    <h1>List of bookings</h1>
        @foreach($bookings as $booking)

            <div class="container  @if($booking->cancelled) cancelled @else container-info @endif">
                <small>Booking number: {{ $booking->id }}</small>
                @if($booking->cancelled) <strong>cancelled</strong> @endif
                <h3>User Details</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Booked from</th>
                        <th>Booked till</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
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
