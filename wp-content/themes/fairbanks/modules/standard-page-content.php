
<section class="page-section standard-page-content">
<div class="inner-column">
  
  <main class="main-column">
    <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part('parts/loop', 'page'); ?>

      <?php endwhile;
    endif; ?>

  </main> <!-- end #main -->

  <?php get_sidebar(); ?>

</div>
</section>
