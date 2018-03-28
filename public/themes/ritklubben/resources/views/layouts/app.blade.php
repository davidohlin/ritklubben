<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body>
    @include('partials.header')
    
    @include('partials.navigation')
    
    <main>
    	@yield('content')
	</main>

    @include('partials.footer')
    
    @php(wp_footer())
  </body>
</html>