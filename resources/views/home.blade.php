@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Welcome</h4></div>

                <div class="panel-body">
                    @foreach($errors->all() as $message)
                        <p class="has-error">{{ $message }}</p>
                    @endforeach

                    <h4>Hello and welcome to our hotel booking app, {{ Auth::user()->name }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
