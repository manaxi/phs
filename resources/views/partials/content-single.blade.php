<section id="post">
  <div class="container">
    <div class="post-title">
        {!! get_the_title() !!}
    </div>
    <div class="bottom-line-post"></div>
    <div class="post-details">
      @php
      $categories = get_the_category();
      if ( ! empty( $categories ) ) {
      echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
      }
      @endphp
      <span class="dividing-line"></span>
      <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" class="author">By  {{ get_the_author() }}</a>
      <span class="dividing-line"></span>
      <a href="#" class="date">{{ get_the_date() }}</a>
    </div>
    <div class="post-img">
      {{the_post_thumbnail()}}
    </div>
    <p>@php the_content() @endphp</p>
    @php comments_template('/partials/comments.blade.php') @endphp
  </div>
</section>
