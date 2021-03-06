@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>{{$hotels_title}}</h4></div>

                <div class="panel-body">
                    @foreach ( $hotels as $hotel )
                    <div class="list-item-with-icon row">
                        <div class="col-md-4">
                        <a href="{{ asset( $hotel->images()['asset_path'].$hotel->images()['image_large'] ) }}" class="gal">
                            <img class="img-thumbnail" src="{{ asset( $hotel->images()['asset_path'].$hotel->images()['image_small'] ) }}" alt="">
                        </a>
                        </div>
                        <div class="col-md-8">
                        <h4><a href="{{ url('hotel', $hotel['id']) }}">{{ $hotel->name }}, {{$hotel->city->name}}, {{$hotel->city->country->name}}
                          @for ($i = 0; $i < $hotel->stars; $i++)
                              ★
                          @endfor
                        </a></h4>
                        <div>{{ $hotel->description }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection