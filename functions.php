<?php

function mts_child_enqueue_scripts() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), '20201509');
}
add_action( 'wp_enqueue_scripts', 'mts_child_enqueue_scripts' );

register_nav_menus( array(
  'shop' => __( 'Shop Menu', 'clean' )
) );