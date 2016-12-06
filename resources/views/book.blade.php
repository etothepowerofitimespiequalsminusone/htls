@extends('layouts.app')

@section('content')
    {{--display prices of rooms--}}
    <div class="container">
        @foreach ($errors->all() as $error)
            {!! $error !!}
        @endforeach
    </div>
    <div class="col-md-2">
        <h2>Price:</h2>
        <ul>
            <li> Single: {{ $hotel->price_single }} </li>
            <li> Double: {{ $hotel->price_double }} </li>
            <li> Triple: {{ $hotel->price_triple }} </li>
        </ul>
    </div>
    {{--booking form--}}

    <div class="col-md-10">
        <h2>Enter your information</h2>
        {!! Form::open(['route'=> 'booking.store','class'=>'booking-form']) !!}

        {{ Form::label('start_date','From:') }}
        {{ Form::date('start_date',null,['placeholder'=>$date]) }}

        {{ Form::label('end_date','To:') }}
        {{ Form::date('end_date',null,['placeholder'=>$date]) }}

        {{ Form::label('number_of_single','Number of single rooms:') }}
        {{ Form::number('number_of_single',0,['min'=>'0', 'step'=> '1']) }}

        {{ Form::label('number_of_double','Number of double rooms:') }}
        {{ Form::number('number_of_double',0,['min'=>'0', 'step'=> '1']) }}

        {{ Form::label('number_of_triple','Number of triple rooms:') }}
        {{ Form::number('number_of_triple',0,['min'=>'0', 'step'=> '1']) }}

        {{ Form::label('address','Address:') }}
        {{ Form::text('address',null) }}

        {{ Form::label('phone','Phone number:') }}
        {{ Form::number('phone',null) }}

        {{ Form::hidden('user_id',auth()->user()->id) }}
        {{ Form::hidden('hotel_id',$id) }}
        {{ Form::submit('Book') }}


        {!! Form::close() !!}
    </div>



@endsection






