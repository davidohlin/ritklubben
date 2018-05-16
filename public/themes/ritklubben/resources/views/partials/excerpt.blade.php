{{-- @php(var_dump($post)) --}}

<a href="{{ get_permalink($post->ID) }}" class="excerpt">
	@if (has_post_thumbnail($post->ID))
	<div class="excerpt__img img-container mb1">
		<img alt="{{ $post->post_title }}" class="lozad" data-src="{!! get_the_post_thumbnail_url($post->ID) !!}">
	</div>
	@endif
	<h2>{{ $post->post_title }}</h2>
</a>