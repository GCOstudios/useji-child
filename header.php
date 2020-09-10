<?php
/**
 * The template for displaying the header.
 *
 * Displays everything from the doctype declaration down to the navigation.
 */
?>
<!DOCTYPE html>
<?php $mts_options = get_option(MTS_THEME_NAME); ?>

<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php mts_meta(); ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body id="blog" <?php body_class('main'); ?>>
	<div class="main-container">

		<header id="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

      <?php if ( isset( $mts_options['mts_header_layout'] ) && is_array( $mts_options['mts_header_layout'] ) && array_key_exists( 'enabled', $mts_options['mts_header_layout'] ) ) {
        $header_parts = $mts_options['mts_header_layout']['enabled'];
      } else {
        $header_parts = array( 'logo-section' => 'logo-section', 'main-navigation' => 'main-navigation' );
      } ?>

        <div class="container clearfix">
          <div class="logo-wrap">
            <?php if ( $mts_options['mts_logo'] != '' && $mts_logo = wp_get_attachment_image_src( $mts_options['mts_logo'], 'full' ) ) { ?>
              <?php if ( is_front_page() || is_home() || is_404() ) { ?>
                <h1 id="logo" class="image-logo" itemprop="headline">
                  <a href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo esc_url( $mts_logo[0] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="<?php echo esc_attr( $mts_logo[1] ); ?>" height="<?php echo esc_attr( $mts_logo[2] ); ?>">
                  </a>
                </h1><!-- END #logo -->
              <?php } else { ?>
                <p id="logo" class="image-logo" itemprop="headline">
                  <a href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo esc_url( $mts_logo[0] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="<?php echo esc_attr( $mts_logo[1] ); ?>" height="<?php echo esc_attr( $mts_logo[2] ); ?>">
                  </a>
                </p><!-- END #logo -->
              <?php } ?>

            <?php } else { ?>

              <?php if ( is_front_page() || is_home() || is_404() ) { ?>
                <h1 id="logo" class="text-logo" itemprop="headline">
                  <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
                </h1><!-- END #logo -->
              <?php } else { ?>
                <p id="logo" class="text-logo" itemprop="headline">
                  <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
                </p><!-- END #logo -->
              <?php } ?>
            <?php } ?>
          </div> <!-- END .logo-wrap -->

          <?php if ( $mts_options['mts_show_primary_nav'] == '1' ) { ?>
            <div id="primary-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
            <?php if ( $mts_options['mts_show_secondary_nav'] !== '1' ) {?><a href="#" id="pull" class="toggle-mobile-menu"><?php _e('Menu', 'clean' ); ?></a><?php } ?>
              <nav class="navigation clearfix<?php if ( $mts_options['mts_show_secondary_nav'] !== '1' ) echo ' mobile-menu-wrapper'; ?>">
                <?php if ( has_nav_menu( 'primary' ) ) { ?>
                  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu clearfix', 'container' => '', 'walker' => new mts_menu_walker ) ); ?>
                <?php } else { ?>
                  <ul class="menu clearfix">
                    <?php wp_list_pages('title_li='); ?>
                  </ul>
                <?php } ?>
              </nav><!-- END nav -->
            </div><!-- END #primary-navigation -->
          <?php } ?>
          <nav class="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'shop', 'menu_class' => 'shop-menu clearfix', 'container' => '', 'walker' => new mts_menu_walker ) ); ?>
          </nav><!-- END nav -->
        </div><!--END .container-->
		</header>
