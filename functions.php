<?php

function mts_child_enqueue_scripts() {
  $parenthandle = 'mts_clean';
  $theme = wp_get_theme();

  wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
      array(),
      $theme->parent()->get('Version')
  );
  wp_enqueue_style( 'child-style', get_stylesheet_uri(),
      array( $parenthandle ),
      $theme->get('Version')
  );
}
add_action( 'wp_enqueue_scripts', 'mts_child_enqueue_scripts' );

// Add the shop sidebar widget area
register_nav_menus( array(
  'shop' => __( 'Shop Menu', 'clean' )
) );

// remove the clear variation link
add_filter('woocommerce_reset_variations_link', '__return_empty_string');