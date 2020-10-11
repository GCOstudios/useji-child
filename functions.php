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

  wp_enqueue_script('child-js', get_stylesheet_directory_uri() . '/js/custom.min.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'mts_child_enqueue_scripts' );

// Add the shop sidebar widget area
register_nav_menus( array(
  'shop' => __( 'Shop Menu', 'clean' )
) );

// remove the clear variation link
add_filter('woocommerce_reset_variations_link', '__return_empty_string');

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}