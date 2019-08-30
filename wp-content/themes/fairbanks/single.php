<?php

/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<div class="content">
  <div class="grid-container">
    <div class="inner-content grid-x  grid-padding-x">






      <?php if ( is_singular('team_members') ) { ?>

        <?php // get data
          $name = get_field('name');
          $title = get_field('title');
          $intro = get_field('bio_introduction');
          $body = get_field('bio_body');
          $headShot = get_field('head_shot')['url'];
          $altText = "" . $name . " head shot";
        ?>

        <section class="page-section team-member-detail">
        <div class="inner-column">

          <article>

            <div class="portrait">
              <figure class="image head-shot">
                <img src="<?=$headShot?>" alt="<?=$altText?>" />
              </figure>
            </div>

            <div class="info">
              <h1 class="name"><?=$name?></h1>

              <?php if ($title) { ?>
                <h2 class="title"><?=$title?></h2>
              <?php } ?>

              <div class='introduction'>
                <?=$intro?>

                <?=$body?>
              </div>
            </div>
          </article>

        </div>
        </section>


        <?php include 'modules/components/faq-list.php'; ?>

      <?php } // end team-member-detail ?>



      <?php if ( is_singular('service') ) { ?>

        <?php // get data
          $teaser = get_field('teaser');
          $title = get_the_title();
          $symbol = "https://placehold.it/200";
        ?>

        <?=$title?>

      <?php } // end team-member-detail ?>




      <main class="main small-12 medium-8 large-8 cell" role="main">
        <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php get_template_part('parts/loop', 'single'); ?>

          <?php endwhile;
        else : ?>

          <?php get_template_part('parts/content', 'missing'); ?>

        <?php endif; ?>

      </main> <!-- end #main -->

      <?php get_sidebar(); ?>

    </div> <!-- end #inner-content -->
  </div>
</div> <!-- end #content -->

<?php get_footer(); ?>