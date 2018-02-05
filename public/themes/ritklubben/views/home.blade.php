<!DOCTYPE html>
<html>
<head>
	<title>{{ get_bloginfo('name') }}</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	{{ wp_head() }}
</head>
<body>
	<script src={{ asset('assets/dist/js/lazyload.min.js') }}></script>

	@foreach ($posts as $post)
		<h2>{{ $post->post_title }}</h2>	
		@if (!empty($post->images))
		@foreach ($post->images as $image)
			<img 
				src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" 
				data-src="{{ $image['image'] }}" 
				onload="lzld(this)">
			{!! $image['caption'] !!}
		@endforeach
		@endif
	@endforeach

</body>
</html>