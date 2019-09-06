
<section class="page-section landing-splash-slider">
<div class="inner-column">

  <flickity-slider class="slide-list flickity-fade"
    data-flickity='{
      "prevNextButtons": false,
      "autoPlay": 7000,
      "pauseAutoPlayOnHover": false
    }'
    >
    <?php
      $rows = get_field('slide');
    ?>

    <?php foreach($rows as $row) { ?>

      <?php
        $backgroundStyles = "background-image: url(" . $row['slide_background_image']['url'] . ")";
        if ($row['slide_button_text']) {
          $buttonText = $row['slide_button_text'];
        } else {
          $buttonText = "Learn more";
        }
      ?>
      <flickity-slide class="slide" style="<?=$backgroundStyles?>">

        <copy-group>
          <h2 class="heading"><?=$row['slide_heading']?></h2>

          <h3 class="subheading"><?=$row['slide_subheading']?></h3>

          <a class="button" href="<?=$row['slide_link']?>">
            <span><?=$buttonText?></span>
          </a>
        </copy-group>

      </flickity-slide>
    <?php } ?>
  </flickity-slider>

</div>
</section>
