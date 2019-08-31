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

    <section class="page-section bread">
    <div class="inner-column">
      
      <?php include('modules/components/bread-crumbs.php'); ?>

    </div>
    </section>


    <section class="page-section team-member-detail">
    <div class="inner-column">

      <article>

        <div class="portrait">
          <decorative-image class="head-shot">
            <img src="<?=$headShot?>" alt="<?=$altText?>" />
          </decorative-image>
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


    <header class="page-section page-header">
    <div class="inner-column">

      <?php
        $pageTitle = get_the_title();
        $teaser = get_field('teaser');
      ?>

      <h1 class="page-title"><?=$pageTitle?></h1>

      <p class="teaser"><?=$teaser?></p>

    </div>
    </header>


    <section class="page-section bread">
    <div class="inner-column">
      
      <?php include('modules/components/bread-crumbs.php'); ?>

    </div>
    </section>


    <section class="page-section standard-page-content two-column">
    <div class="inner-column">

      <?php
        $intro = get_field('intro');
        $body = get_field('body');
        $conclusion = get_field('conclusion');
      ?>

      <main class="primary-content">

        <article>
          <?php if ($intro) { ?>
            <div class="intro">
              <?=$intro?>
            </div>
          <?php } ?>
          
          <rich-text-content class="body">
            <?php if ($body) { ?>
              <?=$body?>
            <?php } else { ?>
              <h3>There is no content for this service yet</h3>

              <p>Visit the site admin panel and add some.</p>
            <?php } ?>
          </rich-text-content>

          <?php if ($conclusion) { ?>
            <div class="conclusion">
              <?=$conclusion?>
            </div>
          <?php } ?>
        </article>

        <?php include 'modules/components/faq-list.php'; ?>
      </main>


      <aside class="alternate-content">
        <sticky-thing>
          <?php // $todo... not sure why this isnt' working... https://codepen.io/sheriffderek/pen/GRKvGoq ?>
          <?php include 'modules/components/contextual-sidebar.php'; ?>
        </sticky-thing>
      </aside>


    </div>
    </section>


    <?php include 'modules/next-steps.php'; ?>

  <?php } // end service-detail ?>




  <?php if ( is_singular('post') ) { ?>


    <header class="page-section page-header">
    <div class="inner-column">

      <?php
        $pageTitle = get_the_title();
        $teaser = get_field('teaser');
      ?>

      <h1 class="page-title"><?=$pageTitle?></h1>

      <p class="teaser"><?=$teaser?></p>

    </div>
    </header>


    <section class="page-section bread">
    <div class="inner-column">
      
      <?php include('modules/components/bread-crumbs.php'); ?>

    </div>
    </section>


    <section class="page-section standard-page-content two-column">
    <div class="inner-column">

      <main class="primary-content">

        <article>
          
          <rich-text-content class="body">
            <h2>Blog post content for <?php the_title(); ?> - will be here</h2>
          </rich-text-content>

        </article>

        <?php include 'modules/components/faq-list.php'; ?>
      </main>


      <aside class="alternate-content">
        <sticky-thing>
          <?php // $todo... not sure why this isnt' working... https://codepen.io/sheriffderek/pen/GRKvGoq ?>
          <?php include 'modules/components/contextual-sidebar.php'; ?>
        </sticky-thing>
      </aside>


    </div>
    </section>


    <?php include 'modules/next-steps.php'; ?>

  <?php } // end service-detail ?>



<?php get_footer(); ?>