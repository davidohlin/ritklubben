<footer class="py4">
	<div class="container mx-auto">
		<div class="clearfix">
			<div class="col col-12 px3 center">
				<div class="footer__heart">
					@include('partials.heart')
				</div>
				<span class="strong">Ritklubben {{ date("Y") }}</span><br>
				<a class="strong" href="mailto:ritklubb@gmail.com">ritklubb@gmail.com</a>
				@if (!empty($social))
				<ul class="social py2">
					@if (!is_null($social['facebook']))
					<li class="social__item"><a class="block" href="{{ $social['facebook'] }}">@include('partials.facebook-logo')</a></li>
					@endif
					@if (!is_null($social['instagram']))
					<li class="social__item"><a class="block" href="{{ $social['instagram'] }}">@include('partials.instagram-logo')</a></li>
					@endif
				</ul>
				@endif
			</div>
		</div>
	</div>
</footer>
