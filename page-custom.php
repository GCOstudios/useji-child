<?php
  /* Template Name: Custom */
  get_header();
?>

<div id="post-<?php the_ID(); ?>" class="custom-hero">
	<article class="<?php mts_article_class(); ?>">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <header>
          <div class="container">
            <h1 class="title entry-title"><?php the_title(); ?></h1>
          </div>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div><!--.post-content-->
			<?php endwhile; ?>
	</article>
<?php get_footer(); ?>