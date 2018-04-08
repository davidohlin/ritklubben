{{--
  Template Name: Dates
--}}

@extends('layouts.app')

@section('content')
@if(!empty($dates))
<div class="container mx-auto">
	<div class="clearfix">
 		@foreach($dates as $date)
		<div class="col col-12 px3 mb3 center">
        	<h2 class="date @if($date['has_passed']) has-passed @endif">{{ $date['weekday'] }} {{ $date['date'] }} {{ $date['month'] }}</h2>
        	<p>{{ $date['time_starts'] }} @if($date['time_ends']) – {{ $date['time_ends'] }} @endif</p>
        	<p>Beckmans Designhögskola</p>
    	</div>
 		@endforeach 
	</div>
</div>
@endif
@endsection
