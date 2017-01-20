@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create Event</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/events') }}">Events</a></li>
            <li class="active">Index</li>
        </ol>
    </div>
</div>
<div class="row">
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr class="bg-info">
          <th>ID</th>
          <th>Organiser Name</th>
          <th>Organiser Email</th>
          <th>Event URL</th>
          <th>Venue City</th>
          <th>Venue Postcode</th>
          <th>Venue Address</th>
          <th>Event Date</th>
          <th>Event Start Time</th>
          <th>Event End Time</th>
          <th>Approved</th>
          <th>Expired</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($events as $event)
        <tr>
          <td>{{ $event->id }}</td>
          <td>{{ $event->organisername }}</td>
          <td>{{ $event->organiseremail }}</td>
          <td>{{ $event->url }}</td>
          <td>{{ $event->city }}</td>
          <td>{{ $event->postcode }}</td>
          <td>{{ $event->address }}</td>
          <td>{{ $event->date }}</td>
          <td>{{ $event->starttime }}</td>
          <td>{{ $event->endtime }}</td>
          <td>{{ $event->approved }}</td>
          <td>{{ $event->expired }}</td>
        </tr>
        @endforeach
      </tbody>
@endsection
