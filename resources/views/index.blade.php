@extends('layouts.app')

@section('content')
<section id="posts" class="text-center py-3">
  <div class="container">
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

<div class="items">
  @php $args = array('showposts'=>6);
  $the_query = new WP_Query($args);
   @endphp

  @while ($the_query->have_posts()) @php($the_query->the_post())
    @include('partials.content-'.get_post_type())
  @endwhile
</div>

  {!! get_the_posts_navigation() !!}
</div>
</section>
@endsection
