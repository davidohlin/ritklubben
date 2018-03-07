@if($navigation && !empty($navigation['page_children']))
	<ul>
	@foreach ($navigation['page_children'] as $page_child)
		<li>
			<a href={{ $page_child->url }}>{{ $page_child->post_title }}</a>
		</li>
	@endforeach
	</ul>
@endif