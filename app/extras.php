<?php
namespace App;


function site_brand() {

  // default to the blog name, in case no logo is set
  $output = get_bloginfo( 'name' );

  if ( has_custom_logo() ) {

    // get the url for the image
    $logo_url = wp_get_attachment_url(get_theme_mod( 'custom_logo' ));

    // wrap in image tag, save as string
    $logo   = '<img src="' . $logo_url . '">';

    // optional, hide the site name, screen reader friendly
    $output = '<span class="sr-only">' . get_bloginfo( 'name' ) . '</span>';

    // stick them together
    $output .= $logo;

  }

  return $logo_url;

}
function get_the_post_thumbnail_url( $post = null, $size = 'post-thumbnail' ) {
  $post_thumbnail_id = get_post_thumbnail_id( $post );
  if ( ! $post_thumbnail_id ) {
      return false;
  }
  return wp_get_attachment_image_url( $post_thumbnail_id, $size );
}
function the_post_thumbnail( $size = 'post-thumbnail', $attr = '' ) {
  $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); 
  echo $feat_image; 
}


function get_the_category( $id = false ) {
  $categories = get_the_terms( $id, 'category' );
  if ( ! $categories || is_wp_error( $categories ) ) {
      $categories = array();
  }

  $categories = array_values( $categories );

  foreach ( array_keys( $categories ) as $key ) {
      _make_cat_compat( $categories[ $key ] );
  }

  /**
   * Filters the array of categories to return for a post.
   *
   * @since 3.1.0
   * @since 4.4.0 Added `$id` parameter.
   *
   * @param WP_Term[] $categories An array of categories to return for the post.
   * @param int|false $id         ID of the post.
   */
  return apply_filters( 'get_the_categories', $categories, $id );
}

