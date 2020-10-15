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

  wp_enqueue_script('child-js', get_stylesheet_directory_uri() . '/js/custom.min.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'mts_child_enqueue_scripts' );

// Add the shop sidebar widget area
register_nav_menus( array(
  'shop' => __( 'Shop Menu', 'clean' )
) );

// remove the clear variation link
add_filter('woocommerce_reset_variations_link', '__return_empty_string');


//* Dequeue scripts and styles
add_action( 'wp_enqueue_scripts', 'bn_disable_woocommerce_loading_css_js' );
 
function bn_disable_woocommerce_loading_css_js() {
 
  // Check if WooCommerce plugin is active
  if( function_exists( 'is_woocommerce' ) ){
  
    // Check if it's any of WooCommerce page
    if(! is_woocommerce() && ! is_cart() && ! is_checkout() ) {         
    
        ## Dequeue WooCommerce styles
        wp_dequeue_style('woocommerce-layout'); 
        wp_dequeue_style('woocommerce-general'); 
        wp_dequeue_style('woocommerce-smallscreen');
        wp_dequeue_style('wc-block-style');
    
        ## Dequeue WooCommerce scripts
        wp_dequeue_script('wc-cart-fragments');
        wp_dequeue_script('woocommerce'); 
        wp_dequeue_script('wc-add-to-cart'); 
        wp_deregister_script( 'js-cookie' );
        wp_dequeue_script( 'js-cookie' );
        wp_dequeue_script( 'vc_woocommerce-add-to-cart-js' );
    
    }
  }   
}