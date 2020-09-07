<?php
  /* Template Name: Home */
  get_header();
?>

<div id="page">
	<article id="post-<?php the_ID(); ?>" <?php post_class("custom-home"); ?>>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>

      <div class="entry-content">
        <?php the_content(); ?>
      </div><!--.entry-content -->

      <div class="entry-subscribe">
        <h2>Subscribe</h2>
        <p>Subscribe to our newsletter to receive news on update</p>
        <form id="mc4wp-form-1" method="post" data-id="599" data-name="Flone Mailchimp">Get E-mail updates about our latest shop and special offers.
          <p><input name="EMAIL" required="" type="email" placeholder="Your email address"><br><input type="submit" value="Subscribe"><br><label style="display: none !important;">Leave this field empty if you’re human: <input tabindex="-1" autocomplete="off" name="_mc4wp_honeypot" type="text" value=""></label><input name="_mc4wp_timestamp" type="hidden" value="1588256905"><input name="_mc4wp_form_id" type="hidden" value="599"><input name="_mc4wp_form_element_id" type="hidden" value="mc4wp-form-1"></p>
        </form>
      </div>

    <?php endwhile; ?>
	</article>
<?php get_footer(); ?>