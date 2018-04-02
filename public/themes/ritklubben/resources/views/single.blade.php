@extends('layouts.app')

@section('content')
<div class="container mx-auto">
	<div class="clearfix">
		<div class="col col-12 md-col-6 px3 mb3">
			<h1 class="mb2">{{ $post->post_title }}</h1>
			@include('partials.author')
			@while(have_posts()) @php(the_post())
				@include('partials.content-page')
			@endwhile
		</div>
		<div class="col col-12">
			<div class="offset">
			@if(isset($post_images) && !empty($post_images))
			@foreach($post_images as $post_image)
				<div class="offset__item px3">
					<img class="col-12" alt="{{ $post_image['post_image']['alt'] }}" src="{{ $post_image['post_image']['url'] }}">
				</div>
			@endforeach
			@endif
			</div>
		</div>
	</div>
</div>
@endsection
