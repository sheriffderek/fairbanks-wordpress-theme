<?php

/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('flex-container'); ?> role="article">
  <div class="flex-child-shrink">
    <?php get_template_part('parts/content', 'date'); ?>
  </div>
  <div class="flex-child-auto">
    <header class="article-header">
      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <span>By <?php the_author(); ?></span>
    </header> <!-- end article header -->

    <section class="entry-content" itemprop="text">
      <?php the_content(); ?>
      <a href="<?php the_permalink() ?>" class="button hollow">Read More</a>
    </section> <!-- end article section -->

    <footer class="article-footer">
      <p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointswp') . '</span> ', ', ', ''); ?></p>
    </footer> <!-- end article footer -->
  </div>
</article> <!-- end article -->