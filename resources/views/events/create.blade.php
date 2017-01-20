@extends('layouts.event')
@section('content')


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Event</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/events') }}">Events</a></li>
            <li class="active">Create</li>
        </ol>
    </div>
</div>
<!-- /.row -->

<!-- Contact Form -->
  <div class="row">
    <div class="col-md-8">
        <h3>Submit your event for approval</h3>
        {!! Form::open(['url' => 'events']) !!}
        <div class="form-group{{ $errors->has('organisername') ? ' has-error' : '' }}">
            {!! Form::label('organisername', 'Organiser Name') !!}
            {!! Form::text('organisername', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('organisername') }}</small>
        </div>
        <div class="form-group{{ $errors->has('organiseremail') ? ' has-error' : '' }}">
            {!! Form::label('organiseremail', 'Organiser E-mail  ') !!}
            {!! Form::email('organiseremail', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('organiseremail') }}</small>
        </div>
        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
            {!! Form::label('url', 'Event Site') !!}
            {!! Form::text('url', null, ['class' => 'form-control' ]) !!}
            <small class="text-danger">{{ $errors->first('url') }}</small>
        </div>
        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            {!! Form::label('city', 'Venue City') !!}
            {!! Form::text('city', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('city') }}</small>
        </div>
        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            {!! Form::label('address', 'Venue Address') !!}
            {!! Form::text('address', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('address') }}</small>
        </div>
        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
            {!! Form::label('state', 'State') !!}
            {!! Form::text('state', null, ['class' => 'form-control']) !!}
            <small class="text-danger">{{ $errors->first('state') }}</small>
        </div>
        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
            {!! Form::label('country', 'Country') !!}
            {!! Form::text('country', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('country') }}</small>
        </div>
        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
            {!! Form::label('date', 'Event Date') !!}
            {!! Form::date('date', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('date') }}</small>
        </div>

            <div class="btn-group pull-right">
                {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
                {!! Form::submit("Submit an event", ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}
    </div>
  </div>
  @endsection
