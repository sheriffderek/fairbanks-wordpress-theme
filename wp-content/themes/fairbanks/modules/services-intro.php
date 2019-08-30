
<section class="page-section services-intro">
<div class="inner-column">

    <h1 class="section-heading">Insurance services</h1>

    <p class="section-subheading">Intro text: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est tempore eius.</p>

    <ol class="service-list">

      <?php

      $service_options = array(
        'post_type' => array('service'),
        // only if "featured" - $todo
        'order' => 'ASC',
        'orderby' => 'date',
      );

      $the_query = new WP_Query( $service_options );

      if ( $the_query->have_posts() ) : 
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php // ============================= ?>



        <?php // get data
          $teaser = get_field('teaser');
          $title = get_the_title();
          $symbol = "https://placehold.it/200";
        ?>

        <a class="link" href='<?php echo get_the_permalink(); ?>'>
          <?php include 'components/service-card.php'; ?>
        </a>


      <?php // =============================
        endwhile;
      endif; 
       
      wp_reset_postdata(); 
      ?>

    </ol>

</div>
</section>
