@extends('layouts.app')

@section('content')
<div class="container mx-auto">
	<div class="clearfix">
		<div class="col col-12 md-col-6 px3">
			<h1>{{ $post->post_title }}</h1>
			<p>{{ $post->post_content }}</p>
		</div>
		<div class="col col-12 md-col-6 px3">
		@if(isset($post_images) && !empty($post_images))
		@foreach($post_images as $post_image)
			<div class="col col-12 mb3">
				<img alt="{{ $post_image['post_image']['alt'] }}" src="{{ $post_image['post_image']['url'] }}">
			</div>
		@endforeach
		@endif
		</div>
	</div>
</div>
@endsection
