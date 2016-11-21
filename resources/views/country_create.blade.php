@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a new country</div>
                <div class="panel-body">
                    {!! Form::open(['action' => 'CountryController@store', 'class' => 'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                    {!! Form::label('country', 'Country name', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::text('country', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('country'))
                        <span class="help-block">
                            <strong>{{ $errors->first('country') }}</strong>
                        </span>
                    @endif                    
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
