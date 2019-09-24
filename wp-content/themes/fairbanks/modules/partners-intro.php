<?php
  $rows = get_field('logos', 'options');
?>

<section class="page-section partners-intro">
<div class="inner-column">


  <flickity-slider class="slide-list"
      data-flickity='{
        "prevNextButtons": false,
        "autoPlay": 7000,
        "pauseAutoPlayOnHover": false,
        "groupCells": true
      }'
    >
    <?php if (isset($rows) && $rows) { 
      foreach ($rows as $row) { ?>

        <flickity-slide>
          <decorative-image class="logo">
            <img src="<?php echo $row['image'] ?>" alt="provider" />
          </decorative-image>
        </flickity-slide>

      <?php } 
    } ?>
  </flickity-slider>


</div>
</section>
