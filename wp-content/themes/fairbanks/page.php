<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>




<?php // loop stuff up here? 

// ???

// ,,,,,,,,,,, ?>


<?php //the_content(); ?>







<?php if ( is_page('about-us') ) { ?>

  <?php include 'modules/page-masthead.php'; ?>

  <?php include 'modules/standard-page-content.php'; ?>

<?php } ?>




<?php if ( is_page('our-team') ) { ?>

  <?php include 'modules/page-masthead.php'; ?>

  <?php include 'modules/team-members.php'; ?>

<?php } ?>




<?php if ( is_page('testimonials') ) { ?>

  <?php include 'modules/page-masthead.php'; ?>

  <?php include 'modules/testimonial-index.php'; ?>

<?php } ?>




<?php if ( is_page('service') ) { ?>

  <?php include 'modules/page-masthead.php'; ?>

  <?php include 'modules/testimonial-index.php'; ?>

<?php } ?>




<?php if ( is_page('contact-us') ) { ?>

  <?php include 'modules/page-masthead.php'; ?>


  <section class="page-section how-to-contact-us">
  <div class="inner-column">

    <?php echo do_shortcode( '[contact-form-7 id="386" title="Contact us"]' ); ?>

  </div>
  </section>

<?php } ?>




<?php if ( is_page('request-a-quote') ) { ?>

  <?php include 'modules/page-masthead.php'; ?>


  <section class="page-section how-to-contact-us">
  <div class="inner-column">

    <?php echo do_shortcode( '[contact-form-7 id="208" title="Request a group quote"]' ); ?>

  </div>
  </section>

<?php } ?>




<?php get_footer(); ?>