<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>



<?php if ( is_page('our-team') ) { ?>

  <?php include 'modules/page-masthead.php'; ?>

  <?php include 'modules/team-members.php'; ?>

<?php } ?>




<?php if ( is_page('testimonials') ) { ?>

  <?php include 'modules/page-masthead.php'; ?>

<?php } ?>




<?php if ( is_page('contact-us') ) { ?>

  <?php include 'modules/page-masthead.php'; ?>


  <section class="page-section how-to-contact-us">
  <div class="inner-column">

    <?php echo do_shortcode( '[contact-form-7 id="208" title="Request a group quote"]' ); ?>

  </div>
  </section>

<?php } ?>


<?php get_footer(); ?>