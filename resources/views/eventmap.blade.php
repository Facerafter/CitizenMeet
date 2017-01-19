@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-body">
          {!! Mapper::render() !!}
        </div>
      </div>
    </div>
  </div>
@endsection
