@if($navigation && !empty($navigation['page_children']))
	<nav class="nav mb4">
		<ul class="nav__list">
		@foreach ($navigation['page_children'] as $page_child)
			<li class="nav__item">
				<a href="{{ $page_child->url }}" class="nav__link">{{ $page_child->post_title }}</a>
			</li>
		@endforeach
		</ul>
	</nav>
@endif