@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a new hotel</div>
                <div class="panel-body">
                    {!! Form::open(['action' => 'HotelController@store', 'files' => true, 'class' => 'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', 'Hotel name', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::text('name', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif    
                    </div>
                    </div>
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::textArea('description', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif                      
                    </div>
                    </div>
                    <div class="form-group">
                    {!! Form::label('city', 'City', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::select('city', $countries, '', ['class' => 'form-control']) !!}
                    </div>
                    </div>
                    <div class="form-group{{ $errors->has('stars') ? ' has-error' : '' }}">
                    {!! Form::label('stars', 'Stars', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::radio('stars', '1') !!}★
                    {!! Form::radio('stars', '2') !!}★★
                    {!! Form::radio('stars', '3', true) !!}★★★
                    {!! Form::radio('stars', '4') !!}★★★★
                    {!! Form::radio('stars', '5') !!}★★★★★
                    @if ($errors->has('stars'))
                        <span class="help-block">
                            <strong>{{ $errors->first('stars') }}</strong>
                        </span>
                    @endif                      
                    </div>
                    </div>
                    <div class="form-group{{ $errors->has('price_single') ? ' has-error' : '' }}">
                    {!! Form::label('price_single', 'Price for single room', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::text('price_single', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('price_single'))
                        <span class="help-block">
                            <strong>{{ $errors->first('price_single') }}</strong>
                        </span>
                    @endif                      
                    </div>
                    </div>
                    <div class="form-group{{ $errors->has('price_double') ? ' has-error' : '' }}">
                    {!! Form::label('price_double', 'Price for double room', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::text('price_double', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('price_double'))
                        <span class="help-block">
                            <strong>{{ $errors->first('price_double') }}</strong>
                        </span>
                    @endif                     
                    </div>
                    </div>
                    <div class="form-group{{ $errors->has('price_triple') ? ' has-error' : '' }}">
                    {!! Form::label('price_triple', 'Price for triple room', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::text('price_triple', '', ['class' => 'form-control']) !!}
                    @if ($errors->has('price_triple'))
                        <span class="help-block">
                            <strong>{{ $errors->first('price_triple') }}</strong>
                        </span>
                    @endif                     
                    </div>
                    </div>
                    <div class="form-group{{ $errors->has('image_small') ? ' has-error' : '' }}">
                    {!! Form::label('image_small', 'Thumbnail image', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::file('image_small', ['class'=>'btn btn-md']) !!}
                    @if ($errors->has('image_small'))
                        <span class="help-block">
                            <strong>{{ $errors->first('image_small') }}</strong>
                        </span>
                    @endif                     
                    </div>
                    </div>
                    <div class="form-group{{ $errors->has('image_large') ? ' has-error' : '' }}">
                    {!! Form::label('image_large', 'Large image', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    {!! Form::file('image_large', ['class'=>'btn btn-md']) !!}
                    @if ($errors->has('image_large'))
                        <span class="help-block">
                            <strong>{{ $errors->first('image_large') }}</strong>
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
