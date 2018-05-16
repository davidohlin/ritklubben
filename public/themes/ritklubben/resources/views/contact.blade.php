{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
<div class="container mx-auto">
	<div class="clearfix">
		<div class="col col-12 md-col-4 px3">
			<img class="lozad mb3" data-src="{{ $featured_image['url'] }}" alt="{{ $featured_image['alt'] }}">
			<ul>
				<li><a class="strong" href="mailto:ritklubb@gmail.com">ritklubb@gmail.com</a></li>
				<li><a class="strong" href="https://www.instagram.com/ritklubb/">Instagram</a></li>
				<li><a class="strong" href="https://www.facebook.com/ritklubben">Facebook</a></li>
			</ul>
		</div>
		<div class="col-right col-12 md-col-8 px3">
		@while(have_posts()) @php(the_post())
			@include('partials.content-page')
		@endwhile
		</div>
	</div>
</div>

@endsection
