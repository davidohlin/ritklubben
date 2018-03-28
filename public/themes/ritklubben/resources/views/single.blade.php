@extends('layouts.app')

@section('content')
<div class="container mx-auto">
	<div class="clearfix">
		<div class="col col-12 md-col-6 px2">
			<h1>{{ $post->post_title }}</h1>
			<p>{{ $post->post_content }}</p>
		</div>
	</div>
</div>
@endsection
