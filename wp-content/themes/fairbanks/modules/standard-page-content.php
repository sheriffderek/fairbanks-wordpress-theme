
<section class="page-section standard-page-content two-column">
<div class="inner-column">

  <?php
    $intro = get_field('content_intro');
    $body = get_field('content_body');
    $conclusion = get_field('content_conclusion');
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
          <h2>There is no content for this page yet</h2>

          <p>Visit the site admin panel and add some.</p>
        <?php } ?>
      </rich-text-content>

      <?php if ($conclusion) { ?>
        <div class="conclusion">
          <?=$conclusion?>
        </div>
      <?php } ?>
    </article>

    <?php include 'components/faq-list.php'; ?>
  </main>


  <aside class="alternate-content">
    <sticky-thing>
      <?php // $todo... not sure why this isnt' working... https://codepen.io/sheriffderek/pen/GRKvGoq ?>
      <?php include 'components/contextual-sidebar.php'; ?>
    </sticky-thing>
  </aside>


</div>
</section>


<?php include 'next-steps.php'; ?>
