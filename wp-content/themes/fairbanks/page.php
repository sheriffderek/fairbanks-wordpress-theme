<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header();

get_template_part('parts/content', 'masthead')
?>





<?php if ( is_page('our-team') ) { ?>

  <?php include 'modules/team-members.php'; ?>

<?php } ?>






<div class="content">
  <div class="grid-container">

    <div class="inner-content grid-x grid-padding-x">

      <main class="main small-12 large-8 medium-8 cell" role="main">
        <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php get_template_part('parts/loop', 'page'); ?>

          <?php endwhile;
        endif; ?>

      </main> <!-- end #main -->

      <?php get_sidebar(); ?>
    </div>
  </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>