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

			@if(isset($posts))
			<div class="offset">
				@foreach ($posts as $post)
				<div class="offset__item px3">
					@include('partials.excerpt')
				</div>
				@endforeach
			</div>
			@endif

		</div>
	</div>
</div>
@endsection
