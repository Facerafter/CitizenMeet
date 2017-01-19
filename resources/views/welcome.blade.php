@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            All Bar Citizen's in one place!
        </h1>
    </div>
</div>
@foreach(array_chunk($events->all(), 3) as $threeEvents)
    <div class="row">
        @foreach($threeEvents as $event)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-info-circle"></i> {{ $event->city}} </h4>
                    </div>
                    <div class="panel-body">
                        <ul>
                          <li>Date: {{ $event->date}}</li>
                          <li>Time: {{ $event->starttime}} - {{ $event->endtime}}</li>
                          <li>Address: {{ $event->address}}</li>
                          <li>Postcode: {{ $event->postcode}}</li>
                        </ul>
                        <a href="{{ $event->url }}" class="btn btn-primary">Website</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endforeach
@endsection
