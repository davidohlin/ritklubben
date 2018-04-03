@extends('layouts.app')

@section('content')
<div class="container mx-auto">
  <div class="clearfix">
    <div class="col col-12 md-col-6 px3 mb3">
      <h1 class="mb2">{{ $post->post_title }}</h1>
      @include('partials.author')
      @while(have_posts()) @php(the_post())
        @include('partials.content-page')
      @endwhile
    </div>
  </div>
</div>
@endsection
