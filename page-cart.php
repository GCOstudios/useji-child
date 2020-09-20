<?php
/**
 * The template for displaying all pages.
 *
 * Other pages can use a different template by creating a file following any of these format:
 * - page-$slug.php
 * - page-$id.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
$mts_options = get_option(MTS_THEME_NAME);

get_header(); ?>

<?php if ( is_cart() || is_checkout() ) { ?>

  <div class="hero">
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </div>

  <div id="page" class="<?php mts_single_page_class(); ?>">

    <article id="post-<?php the_ID(); ?>" class="<?php mts_article_class(); ?>">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>
        
      <?php endwhile; ?>

    </article>

  <?php get_footer(); ?>
  
<?php } ?>