
<?php
/* 
Template Name: Blog index
*/
get_header(); ?>



<?php include 'modules/page-masthead.php'; ?>
 


<section class="page-section blog-stuffs two-column">
<div class="inner-column">
  

  <main class="primary-content">
    
    <h1>Paginated list of blog articles should be here...</h1>
    
    <ol>
<?php 
  
  $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
    <?php if ( $wpb_all_query->have_posts() ) : ?>
 
    <ol>
      <!-- the loop -->
      <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile; ?>
      <!-- end of the loop -->
   
   
      <?php wp_reset_postdata(); ?>
    </ol>

    <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>


    <rich-text-content>
      <h2>Are there acually any blog posts yet?</h2>
    </rich-text-content>

  </main>

  <aside class="alternate-content">
    <?php include 'modules/components/contextual-sidebar.php'; ?>
  </aside>


</div>
</section>

 

<?php get_footer(); ?>
