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

			@if(isset($posts['even']))
			<div class="col col-12 sm-col-6 px3 mt4">
				@foreach ($posts['even'] as $post)
				<div class="col col-12 mb3">
					@include('partials.excerpt')
				</div>
				@endforeach
			</div>
			@endif

			@if(isset($posts['odd']))
			<div class="col col-12 sm-col-6 px3">
				@foreach ($posts['odd'] as $post)
				<div class="col col-12 mb3">
					@include('partials.excerpt')
				</div>
				@endforeach
			</div>
			@endif
		</div>
	</div>
</div>
@endsection
