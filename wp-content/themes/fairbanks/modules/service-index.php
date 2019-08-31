
<?php
/* 
Template Name: Service index
*/
get_header(); ?>



<?php include 'page-masthead.php'; ?>



<ul class="service-list">

  <?php

  $serviceType = get_field('associated_service_type');

  $service_options = array(
    'post_type' => array('service'),
    // only if "in this category..." - $todo
    // 'order' => 'ASC',
    // 'orderby' => 'date',
    'tax_query' => array(
      array(
        'taxonomy' => 'service_type',
        'field' => 'slug',
        'terms' => $serviceType
      )
    )
  );

  $the_query = new WP_Query( $service_options );

  if ( $the_query->have_posts() ) : 
    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <?php // ============================= ?>







    <?php // get data
      $teaser = get_field('teaser');
      $title = get_the_title();
    ?>

    <section class="page-section service">
    <div class="inner-column">

      <decorative-image>
        <img src="https://placehold.it/1600x900" />
      </decorative-image>

      <copy-group>
        <h1 class="title"><?=$title?></h1>

        <h2 class="teaser"><?=$teaser?></h2>

        <a class="link" href="<?php the_permalink(); ?>">
          <span>Learn more</span>
        </a>
      </copy-group>

    </div>
    </section>








  <?php // =============================
    endwhile;
  endif; 
   
  wp_reset_postdata(); 
  ?>


</ul>


<?php get_footer(); ?>
