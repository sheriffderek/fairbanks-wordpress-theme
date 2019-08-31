<?php

/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>



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


        <?php include 'modules/faq-intro.php'; ?>

      <?php } // end team-member-detail ?>



      <?php if ( is_singular('service') ) { ?>

        <?php // get data
          $teaser = get_field('teaser');
          $title = get_the_title();
          $fullArticle = get_field('full_article');
        ?>


        <section class="page-section page-name">
        <div class="inner-column">
          
          <h1 class="big"><?=$title?></h1>

          <?php // include 'modules/standard-page-content.php'; ?>  

          <rich-text-content>
            <?=$fullArticle?>
            <p>Then all the service info goes here...</p>
          </rich-text-content>

        </div>
        </section>

      <?php } // end service-detail ?>




<?php get_footer(); ?>