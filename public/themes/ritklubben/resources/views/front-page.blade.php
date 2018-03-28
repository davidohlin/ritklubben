{{--
	Template Name: Frontpage
--}}

@extends('layouts.app')

@section('content')
<div class="container mx-auto">
	<div class="clearfix">
		<div class="col col-12">
			@if (!have_posts())
			<div class="alert alert-warning">
				{{ __('Sorry, no results were found.', 'sage') }}
			</div>
				{!! get_search_form(false) !!}
			@endif
	
			@foreach ($posts as $post)
				<div class="col col-12 md-col-6 px2">
					@include('partials.excerpt')
				</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
