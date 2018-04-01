{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
<div class="container mx-auto">
	<div class="clearfix">
		<div class="col col-12 md-col-6 px2">
			<div class="img-container">
				<img class="lozad" data-src="{{ $featured_image['url'] }}" alt="{{ $featured_image['alt'] }}">
			</div>
		</div>
		<div class="col-right col-12 md-col-6 px2" style="font-size:%;">
		@while(have_posts()) @php(the_post())
			@include('partials.content-page')
		@endwhile
		</div>
	</div>
</div>

@endsection
