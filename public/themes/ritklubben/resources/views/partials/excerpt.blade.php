{{-- @php(var_dump($post)) --}}


@if (has_post_thumbnail($post->ID))
<img alt="{{ $post->post_title }}" src="{!! get_the_post_thumbnail_url($post->ID) !!}">
@endif
<h2><a href="{{ get_permalink($post->ID) }}">{{ $post->post_title }}</a></h2>