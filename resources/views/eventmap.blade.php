@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Event Worldmap</h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li class="active">Event Worldmap</li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="embed-responsive embed-responsive-16by9">
      <div id="map_canvas" class="embed-responsive-item">
        {!! Mapper::render() !!}
      </div>
    </div>
  </div>
</div>
@endsection
