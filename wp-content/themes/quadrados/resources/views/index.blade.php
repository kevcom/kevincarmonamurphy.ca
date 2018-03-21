@extends('layouts.app')

@section('content')

  <h1>articles</h1>

  @php( query_posts( 'category_name=articles&posts_per_page=3'))

  {!! get_the_posts_navigation() !!}

  <div class="articles">

    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php(the_post())
      @include('partials.content-'.get_post_type())
    @endwhile

  </div>

  <h1>portfolio</h1>

  @php( query_posts( 'category_name=portfolio&posts_per_page=3'))

  {!! get_the_posts_navigation() !!}

  <div class="portfolio">

    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php(the_post())
      @include('partials.content-'.get_post_type())
    @endwhile

  </div>




@endsection
