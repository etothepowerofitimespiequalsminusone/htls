@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Administrator Panel</div>
                <div class="panel-body">
                    <ul class="list">
                       <li><a href="{{ url('country/create') }}">Add a new country</a></li>
                       <li><a href="{{ url('city/create') }}">Add a new city</a></li>
                       <li><a href="{{ url('hotel/create') }}">Add a new hotel</a></li>
                       <li><a href="{{ url('admin/booking') }}">View booking information </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection