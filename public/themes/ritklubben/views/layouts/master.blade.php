<!doctype html>
<html @php(language_attributes())>
	@include('partials.head')
	<body>
		@include('partials.header')

		@yield('content')
		<div id="instagram"></div>
		@include('partials.footer')
		
		@php(wp_footer())
	</body>
</html>