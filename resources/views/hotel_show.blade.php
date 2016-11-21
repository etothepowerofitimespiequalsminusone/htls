@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>{{ $hotel->name }}, {{$hotel->city->name}}, {{$hotel->city->country->name}}
                @for ($i = 0; $i < $hotel->stars; $i++)
                  ★
                @endfor</h4>
                </div>

                <div class="panel-body">
                    <h4><a href='{{ url('book', $hotel->id) }}'>Book</a></h4>
                    <p>Price for single room: {{ $hotel->price_single }} &euro;</p>
                    <p>Price for double room: {{ $hotel->price_double }} &euro;</p>
                    <p>Price for triple room: {{ $hotel->price_triple }} &euro;</p>

                    <img src='{{ asset( $hotel->images()['asset_path'].$hotel->images()['image_large'] ) }}' style='width: 720px;'>

                    <p>{{ $hotel->description }}</p>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection