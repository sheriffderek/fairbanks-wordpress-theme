
<section class="team-members">

  <?php

  $team_member_options = array(
    'post_type' => array('team_members'),
    'order' => 'ASC',
    'orderby' => 'date',
  );

  $the_query = new WP_Query( $team_member_options );
   
  if ( $the_query->have_posts() ) : 
    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <?php // ============================= ?>



  <?php // get data
    $name = get_field('name');
    $title = get_field('title');
    $intro = get_field('bio_introduction');
    $body = get_field('bio_body');
    $headShot = get_field('head_shot')['url'];
    $link = get_the_permalink();
    $altText = "" . $name . " head shot";
    $backgroundColor = get_field('unique_color');
    if ($backgroundColor) {
      $backgroundStyles = "background-color: " . $backgroundColor . "";
    } else {
      $backgroundStyles = "";
    }
  ?>


  <section class="page-section team-member" style="<?=$backgroundStyles?>">
  <div class="inner-column">

    <?php include 'components/team-member-card.php'; ?>

  </div>
  </section>



  <?php // =============================
    endwhile;
  endif; 
   
  wp_reset_postdata(); 
  ?>

</section>
