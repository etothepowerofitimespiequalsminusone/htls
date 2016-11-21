@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a new city</div>
                <div class="panel-body">
                    {!! Form::open(['action' => 'CityController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                    {!! Form::label('city', 'City name', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::text('city', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('city'))
                        <span class="help-block">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif                    
                    </div>
                    </div>
                    <div class="form-group">
                    {!! Form::label('country', 'Country', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::select('country', $countries, '', ['class' => 'form-control']) !!}
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                    {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                    </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
