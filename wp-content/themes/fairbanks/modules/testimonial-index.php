
<section class="team-members">

  <?php

  $testimonials_options = array(
    'post_type' => array('testimonial'),
    'order' => 'ASC',
    'orderby' => 'date',
  );

  $the_query = new WP_Query( $testimonials_options );
   
  if ( $the_query->have_posts() ) : 
    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <?php // ============================= ?>

  <?php // get data
    $teaser = get_field('teaser_quote');
    $source = get_field('source');
    $full = get_field('full_quote');
    $link = get_the_permalink();
  ?>

  <section class="page-section testimo">
  <div class="inner-column">

    <div class="header"><?=$teaser?></div>
    <div class="source">- <?=$source?></div>
    <div class="full"><?=$full?></div>

    <a class="button" href="<?=$link?>">
      <span>Read the full case study / testimonial</span>
    </a>

  </div>
  </section>



  <?php // =============================
    endwhile;
  endif; 
   
  wp_reset_postdata(); 
  ?>

</section>
