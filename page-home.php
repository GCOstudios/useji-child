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
    <?php endwhile; ?>

    <div class="home-grid">
      <div class="grid-item item-1">
        <figure>
          <img src="" alt="">
          <figcaption>
            Item Title 1
            <span>£150.00</span>
          </figcaption>
        </figure>
      </div>
      <div class="grid-item item-2">
        <figure>
          <img src="" alt="">
          <figcaption>
            Item Title 2
            <span>£150.00</span>
          </figcaption>
        </figure>
      </div>
      <div class="grid-item item-3">
        <figure>
          <img src="" alt="">
          <figcaption>
            Item Title 3
            <span>£150.00</span>
          </figcaption>
        </figure>
      </div>
      <div class="grid-item item-4">
        <figure>
          <img src="" alt="">
          <figcaption>
            Item Title 4
            <span>£150.00</span>
          </figcaption>
        </figure>
      </div>
      <div class="grid-item item-5">
        <figure>
          <img src="" alt="">
          <figcaption>
            Item Title 5
            <span>£150.00</span>
          </figcaption>
        </figure>
      </div>
      <div class="grid-item item-6">
        <figure>
          <img src="" alt="">
          <figcaption>
            Item Title 6
            <span>£150.00</span>
          </figcaption>
        </figure>
      </div>
      <div class="grid-item item-7">
        <figure>
          <img src="" alt="">
          <figcaption>
            Item Title 7
            <span>£150.00</span>
          </figcaption>
        </figure>
      </div>
      <div class="grid-item item-8">
        <figure>
          <img src="" alt="">
          <figcaption>
            Item Title 8
            <span>£150.00</span>
          </figcaption>
        </figure>
      </div>
    </div>

    <div class="entry-subscribe">
      <h2>Subscribe</h2>
      <p>Subscribe to our newsletter to receive news on update</p>
      <form id="mc4wp-form-1" method="post" data-id="599" data-name="Flone Mailchimp">Get E-mail updates about our latest shop and special offers.
        <p><input name="EMAIL" required="" type="email" placeholder="Your email address"><br><input type="submit" value="Subscribe"><br><label style="display: none !important;">Leave this field empty if you’re human: <input tabindex="-1" autocomplete="off" name="_mc4wp_honeypot" type="text" value=""></label><input name="_mc4wp_timestamp" type="hidden" value="1588256905"><input name="_mc4wp_form_id" type="hidden" value="599"><input name="_mc4wp_form_element_id" type="hidden" value="mc4wp-form-1"></p>
      </form>
    </div>
	</article>
<?php get_footer(); ?>