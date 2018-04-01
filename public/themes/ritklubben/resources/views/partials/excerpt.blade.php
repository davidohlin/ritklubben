{{-- @php(var_dump($post)) --}}

<article class="excerpt">
	@if (has_post_thumbnail($post->ID))
	<a class="img-link" href="{{ get_permalink($post->ID) }}">
		<div class="img-container">
			<img alt="{{ $post->post_title }}" class="lozad" data-src="{!! get_the_post_thumbnail_url($post->ID) !!}">
		</div>
	</a>
	@endif
	<h2><a href="{{ get_permalink($post->ID) }}">{{ $post->post_title }}</a></h2>
</article>