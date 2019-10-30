<div class="item">
  <div class="item-image">
    {{the_post_thumbnail()}}
  </div>
  <div class="item-text">
    <div class="item-text-wrap">
      <div class="item-text-category">
       @php
       $categories = get_the_category();
       if ( ! empty( $categories ) ) {
      echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
      }
       @endphp
      </div>
      <div class="item-text-title">
          <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
      </div>
    </div>
  </div>
</div>