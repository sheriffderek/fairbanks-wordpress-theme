
<?php if ( get_field('next_heading') ) { ?>

  <?php // get data
    $heading = get_field('next_heading');
    $link = get_field('next_link');
    $directions = get_field('next_directions');
    $image = get_field('next_image')['url'];
    $customButtonText = ( get_field('next_cta') ? get_field('next_cta') : "Learn more" );
  ?>

  <section class="page-section next-steps">
  <div class="inner-column">

    <div>

      <?php if ($image) { ?>
        <decorative-image>
          <img src="<?=$image?>" />
        </decorative-image>
      <?php } ?>

      <h2 class="heading"><?=$heading?></h2>
      
      <?php if ($directions) { ?>
        <div class="directions">
          <?=$directions?>
        </div>
      <?php } ?>

      <a class="button" href="<?=$link?>">
        <span><?=$customButtonText?></span>
      </a>
    </div>

  </div>
  </section>
<?php } ?>
