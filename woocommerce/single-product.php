<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
get_header('shop'); ?>

<div class="custom-breadcrumb">
  <div class="container">
    <?php woocommerce_breadcrumb(); ?>
  </div>
</div>

<div id="page">

  <?php // do_action('woocommerce_before_main_content'); ?>

    <?php while ( have_posts() ) : the_post(); ?>
      <?php wc_get_template_part( 'content', 'single-product' ); ?>
    <?php endwhile; // end of the loop. ?>

  <?php // do_action('woocommerce_after_main_content'); ?>

	<?php /*do_action('woocommerce_sidebar');*/ ?>

<?php get_footer(); ?>